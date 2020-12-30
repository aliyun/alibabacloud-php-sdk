<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ResetUserStatusRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $ramIdList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'ramIdList'  => 'RamIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ramIdList) {
            $res['RamIdList'] = $this->ramIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetUserStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RamIdList'])) {
            if (!empty($map['RamIdList'])) {
                $model->ramIdList = $map['RamIdList'];
            }
        }

        return $model;
    }
}
