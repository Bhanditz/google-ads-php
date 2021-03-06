<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/gender_type.proto

namespace Google\Ads\GoogleAds\V0\Enums\GenderTypeEnum;

/**
 * The type of demographic genders (e.g. female).
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.GenderTypeEnum.GenderType</code>
 */
class GenderType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Male.
     *
     * Generated from protobuf enum <code>MALE = 10;</code>
     */
    const MALE = 10;
    /**
     * Female.
     *
     * Generated from protobuf enum <code>FEMALE = 11;</code>
     */
    const FEMALE = 11;
    /**
     * Undetermined gender.
     *
     * Generated from protobuf enum <code>UNDETERMINED = 20;</code>
     */
    const UNDETERMINED = 20;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenderType::class, \Google\Ads\GoogleAds\V0\Enums\GenderTypeEnum_GenderType::class);

