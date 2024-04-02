<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeBizTypeSettingRequest extends Model
{
    /**
     * @var string
     */
    public $bizTypeName;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'bizTypeName'  => 'BizTypeName',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypeName) {
            $res['BizTypeName'] = $this->bizTypeName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBizTypeSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypeName'])) {
            $model->bizTypeName = $map['BizTypeName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
