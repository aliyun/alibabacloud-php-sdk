<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsResponseBody\pagingInfo\dataAssets;

use AlibabaCloud\Dara\Model;

class dataAssetTagMappings extends Model
{
    /**
     * @var bool
     */
    public $autoTraceEnabled;
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $dataAssetId;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $tagSource;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'autoTraceEnabled' => 'AutoTraceEnabled',
        'creator'          => 'Creator',
        'dataAssetId'      => 'DataAssetId',
        'key'              => 'Key',
        'tagSource'        => 'TagSource',
        'value'            => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
