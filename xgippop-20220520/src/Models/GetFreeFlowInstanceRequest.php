<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetFreeFlowInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $aliuid;

    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $itemCode;
    protected $_name = [
        'aliuid'     => 'Aliuid',
        'appId'      => 'AppId',
        'instanceId' => 'InstanceId',
        'itemCode'   => 'ItemCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFreeFlowInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }

        return $model;
    }
}
