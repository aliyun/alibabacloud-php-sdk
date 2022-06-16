<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetFreeFlowProductListRequest extends Model
{
    /**
     * @description 用户编号
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'aliUid'     => 'AliUid',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFreeFlowProductListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
