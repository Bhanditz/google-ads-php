<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/resource_access_denied_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\ResourceAccessDeniedErrorEnum;

/**
 * Enum describing possible resource access denied errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.ResourceAccessDeniedErrorEnum.ResourceAccessDeniedError</code>
 */
class ResourceAccessDeniedError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * User did not have write access.
     *
     * Generated from protobuf enum <code>WRITE_ACCESS_DENIED = 3;</code>
     */
    const WRITE_ACCESS_DENIED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceAccessDeniedError::class, \Google\Ads\GoogleAds\V1\Errors\ResourceAccessDeniedErrorEnum_ResourceAccessDeniedError::class);

