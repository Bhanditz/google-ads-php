<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/extension_feed_item.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An extension feed item.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.ExtensionFeedItem</code>
 */
class ExtensionFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the extension feed item.
     * Extension feed item resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The extension type of the extension feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionTypeEnum.ExtensionType extension_type = 13;</code>
     */
    private $extension_type = 0;
    /**
     * Start time in which this feed item is effective and can begin serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     */
    private $start_date_time = null;
    /**
     * End time in which this feed item is no longer effective and will stop
     * serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     */
    private $end_date_time = null;
    /**
     * Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemStatusEnum.FeedItemStatus status = 4;</code>
     */
    private $status = 0;
    protected $extension;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the extension feed item.
     *           Extension feed item resource names have the form:
     *           `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *     @type int $extension_type
     *           The extension type of the extension feed item.
     *           This field is read-only.
     *     @type \Google\Protobuf\StringValue $start_date_time
     *           Start time in which this feed item is effective and can begin serving.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Protobuf\StringValue $end_date_time
     *           End time in which this feed item is no longer effective and will stop
     *           serving.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type int $status
     *           Status of the feed item.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V1\Common\SitelinkFeedItem $sitelink_feed_item
     *           Sitelink extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\StructuredSnippetFeedItem $structured_snippet_feed_item
     *           Structured snippet extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\AppFeedItem $app_feed_item
     *           App extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\CallFeedItem $call_feed_item
     *           Call extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\CalloutFeedItem $callout_feed_item
     *           Callout extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\TextMessageFeedItem $text_message_feed_item
     *           Text message extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\PriceFeedItem $price_feed_item
     *           Price extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\PromotionFeedItem $promotion_feed_item
     *           Promotion extension.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\ExtensionFeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the extension feed item.
     * Extension feed item resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the extension feed item.
     * Extension feed item resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The extension type of the extension feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionTypeEnum.ExtensionType extension_type = 13;</code>
     * @return int
     */
    public function getExtensionType()
    {
        return $this->extension_type;
    }

    /**
     * The extension type of the extension feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionTypeEnum.ExtensionType extension_type = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setExtensionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\ExtensionTypeEnum_ExtensionType::class);
        $this->extension_type = $var;

        return $this;
    }

    /**
     * Start time in which this feed item is effective and can begin serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDateTime()
    {
        return $this->start_date_time;
    }

    /**
     * Start time in which this feed item is effective and can begin serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDateTime()
    {
        return $this->end_date_time;
    }

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->end_date_time = $var;

        return $this;
    }

    /**
     * Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemStatusEnum.FeedItemStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemStatusEnum.FeedItemStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\FeedItemStatusEnum_FeedItemStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Sitelink extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.SitelinkFeedItem sitelink_feed_item = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\SitelinkFeedItem
     */
    public function getSitelinkFeedItem()
    {
        return $this->readOneof(2);
    }

    /**
     * Sitelink extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.SitelinkFeedItem sitelink_feed_item = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\SitelinkFeedItem $var
     * @return $this
     */
    public function setSitelinkFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\SitelinkFeedItem::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Structured snippet extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.StructuredSnippetFeedItem structured_snippet_feed_item = 3;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\StructuredSnippetFeedItem
     */
    public function getStructuredSnippetFeedItem()
    {
        return $this->readOneof(3);
    }

    /**
     * Structured snippet extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.StructuredSnippetFeedItem structured_snippet_feed_item = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\StructuredSnippetFeedItem $var
     * @return $this
     */
    public function setStructuredSnippetFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\StructuredSnippetFeedItem::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * App extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AppFeedItem app_feed_item = 7;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\AppFeedItem
     */
    public function getAppFeedItem()
    {
        return $this->readOneof(7);
    }

    /**
     * App extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AppFeedItem app_feed_item = 7;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\AppFeedItem $var
     * @return $this
     */
    public function setAppFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\AppFeedItem::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Call extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CallFeedItem call_feed_item = 8;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\CallFeedItem
     */
    public function getCallFeedItem()
    {
        return $this->readOneof(8);
    }

    /**
     * Call extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CallFeedItem call_feed_item = 8;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\CallFeedItem $var
     * @return $this
     */
    public function setCallFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\CallFeedItem::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Callout extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CalloutFeedItem callout_feed_item = 9;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\CalloutFeedItem
     */
    public function getCalloutFeedItem()
    {
        return $this->readOneof(9);
    }

    /**
     * Callout extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CalloutFeedItem callout_feed_item = 9;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\CalloutFeedItem $var
     * @return $this
     */
    public function setCalloutFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\CalloutFeedItem::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Text message extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.TextMessageFeedItem text_message_feed_item = 10;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\TextMessageFeedItem
     */
    public function getTextMessageFeedItem()
    {
        return $this->readOneof(10);
    }

    /**
     * Text message extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.TextMessageFeedItem text_message_feed_item = 10;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\TextMessageFeedItem $var
     * @return $this
     */
    public function setTextMessageFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\TextMessageFeedItem::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Price extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PriceFeedItem price_feed_item = 11;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\PriceFeedItem
     */
    public function getPriceFeedItem()
    {
        return $this->readOneof(11);
    }

    /**
     * Price extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PriceFeedItem price_feed_item = 11;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PriceFeedItem $var
     * @return $this
     */
    public function setPriceFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\PriceFeedItem::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Promotion extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PromotionFeedItem promotion_feed_item = 12;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\PromotionFeedItem
     */
    public function getPromotionFeedItem()
    {
        return $this->readOneof(12);
    }

    /**
     * Promotion extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PromotionFeedItem promotion_feed_item = 12;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PromotionFeedItem $var
     * @return $this
     */
    public function setPromotionFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\PromotionFeedItem::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->whichOneof("extension");
    }

}

