<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class aclInfo extends Model
{
    /**
     * @var string
     */
    public $aclType;
    protected $_name = [
        'aclType' => 'aclType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['aclType'] = $this->aclType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aclType'])) {
            $model->aclType = $map['aclType'];
        }

        return $model;
    }
}
