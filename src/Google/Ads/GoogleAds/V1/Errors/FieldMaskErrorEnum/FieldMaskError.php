<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/field_mask_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\FieldMaskErrorEnum;

/**
 * Enum describing possible field mask errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.FieldMaskErrorEnum.FieldMaskError</code>
 */
class FieldMaskError
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
     * The field mask must be provided for update operations.
     *
     * Generated from protobuf enum <code>FIELD_MASK_MISSING = 5;</code>
     */
    const FIELD_MASK_MISSING = 5;
    /**
     * The field mask must be empty for create and remove operations.
     *
     * Generated from protobuf enum <code>FIELD_MASK_NOT_ALLOWED = 4;</code>
     */
    const FIELD_MASK_NOT_ALLOWED = 4;
    /**
     * The field mask contained an invalid field.
     *
     * Generated from protobuf enum <code>FIELD_NOT_FOUND = 2;</code>
     */
    const FIELD_NOT_FOUND = 2;
    /**
     * The field mask updated a field with subfields. Fields with subfields may
     * be cleared, but not updated. To fix this, the field mask should select
     * all the subfields of the invalid field.
     *
     * Generated from protobuf enum <code>FIELD_HAS_SUBFIELDS = 3;</code>
     */
    const FIELD_HAS_SUBFIELDS = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldMaskError::class, \Google\Ads\GoogleAds\V1\Errors\FieldMaskErrorEnum_FieldMaskError::class);

