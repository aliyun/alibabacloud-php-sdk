<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsResponseBody\pagingInfo\dataAssets;

use AlibabaCloud\Tea\Model;

class dataAssetTagMappings extends Model
{
    /**
     * @description Indicates whether the lineage-based automatic backtrack feature is enabled for the mapping.
     *
     * @example false
     *
     * @var bool
     */
    public $autoTraceEnabled;

    /**
     * @description The creator of the mapping between the data asset and the tag.
     *
     * @example 12345
     *
     * @var string
     */
    public $creator;

    /**
     * @description The data asset ID.
     *
     * @example 7259557313
     *
     * @var string
     */
    public $dataAssetId;

    /**
     * @description The tag key.
     *
     * @example key
     *
     * @var string
     */
    public $key;

    /**
     * @description The way in which the mapping between the data asset and the tag is created. Valid values:
     *
     *   System
     *   UserDefined
     *
     * @example UserDefined
     *
     * @var string
     */
    public $tagSource;

    /**
     * @description The tag value.
     *
     * @example value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'autoTraceEnabled' => 'AutoTraceEnabled',
        'creator' => 'Creator',
        'dataAssetId' => 'DataAssetId',
        'key' => 'Key',
        'tagSource' => 'TagSource',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoTraceEnabled) {
            $res['AutoTraceEnabled'] = $this->autoTraceEnabled;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->dataAssetId) {
            $res['DataAssetId'] = $this->dataAssetId;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->tagSource) {
            $res['TagSource'] = $this->tagSource;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataAssetTagMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoTraceEnabled'])) {
            $model->autoTraceEnabled = $map['AutoTraceEnabled'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DataAssetId'])) {
            $model->dataAssetId = $map['DataAssetId'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['TagSource'])) {
            $model->tagSource = $map['TagSource'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
