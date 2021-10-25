<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTenantBizConfigResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $configValueType;

    /**
     * @var string
     */
    public $configDescription;
    protected $_name = [
        'key'               => 'Key',
        'value'             => 'Value',
        'bizId'             => 'BizId',
        'configValueType'   => 'ConfigValueType',
        'configDescription' => 'ConfigDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->configValueType) {
            $res['ConfigValueType'] = $this->configValueType;
        }
        if (null !== $this->configDescription) {
            $res['ConfigDescription'] = $this->configDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ConfigValueType'])) {
            $model->configValueType = $map['ConfigValueType'];
        }
        if (isset($map['ConfigDescription'])) {
            $model->configDescription = $map['ConfigDescription'];
        }

        return $model;
    }
}
