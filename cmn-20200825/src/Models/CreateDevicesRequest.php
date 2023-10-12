<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDevicesRequest\deviceParamModelList;
use AlibabaCloud\Tea\Model;

class CreateDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deviceFormId;

    /**
     * @var deviceParamModelList[]
     */
    public $deviceParamModelList;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'deviceFormId'         => 'DeviceFormId',
        'deviceParamModelList' => 'DeviceParamModelList',
        'instanceId'           => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deviceFormId) {
            $res['DeviceFormId'] = $this->deviceFormId;
        }
        if (null !== $this->deviceParamModelList) {
            $res['DeviceParamModelList'] = [];
            if (null !== $this->deviceParamModelList && \is_array($this->deviceParamModelList)) {
                $n = 0;
                foreach ($this->deviceParamModelList as $item) {
                    $res['DeviceParamModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['DeviceParamModelList'])) {
            if (!empty($map['DeviceParamModelList'])) {
                $model->deviceParamModelList = [];
                $n                           = 0;
                foreach ($map['DeviceParamModelList'] as $item) {
                    $model->deviceParamModelList[$n++] = null !== $item ? deviceParamModelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
