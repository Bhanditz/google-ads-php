<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An expanded dynamic search ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.ExpandedDynamicSearchAdInfo</code>
 */
class ExpandedDynamicSearchAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 1;</code>
     */
    private $description = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $description
     *           The description of the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

}
