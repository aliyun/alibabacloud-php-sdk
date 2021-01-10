<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUpdateDeviceNicknameRequest\deviceNicknameInfo;
use AlibabaCloud\Tea\Model;

class BatchUpdateDeviceNicknameRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $realTenantId;

    /**
     * @var string
     */
    public $realTripartiteKey;

    /**
     * @var deviceNicknameInfo[]
     */
    public $deviceNicknameInfo;
    protected $_name = [
        'apiProduct'         => 'ApiProduct',
        'apiRevision'        => 'ApiRevision',
        'iotInstanceId'      => 'IotInstanceId',
        'realTenantId'       => 'RealTenantId',
        'realTripartiteKey'  => 'RealTripartiteKey',
        'deviceNicknameInfo' => 'DeviceNicknameInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->realTenantId) {
            $res['RealTenantId'] = $this->realTenantId;
        }
        if (null !== $this->realTripartiteKey) {
            $res['RealTripartiteKey'] = $this->realTripartiteKey;
        }
        if (null !== $this->deviceNicknameInfo) {
            $res['DeviceNicknameInfo'] = [];
            if (null !== $this->deviceNicknameInfo && \is_array($this->deviceNicknameInfo)) {
                $n = 0;
                foreach ($this->deviceNicknameInfo as $item) {
                    $res['DeviceNicknameInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUpdateDeviceNicknameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['RealTenantId'])) {
            $model->realTenantId = $map['RealTenantId'];
        }
        if (isset($map['RealTripartiteKey'])) {
            $model->realTripartiteKey = $map['RealTripartiteKey'];
        }
        if (isset($map['DeviceNicknameInfo'])) {
            if (!empty($map['DeviceNicknameInfo'])) {
                $model->deviceNicknameInfo = [];
                $n                         = 0;
                foreach ($map['DeviceNicknameInfo'] as $item) {
                    $model->deviceNicknameInfo[$n++] = null !== $item ? deviceNicknameInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
