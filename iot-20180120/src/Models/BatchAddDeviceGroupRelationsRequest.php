<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddDeviceGroupRelationsRequest\device;
use AlibabaCloud\Tea\Model;

class BatchAddDeviceGroupRelationsRequest extends Model
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
    public $groupId;

    /**
     * @var string
     */
    public $realTenantId;

    /**
     * @var string
     */
    public $realTripartiteKey;

    /**
     * @var device[]
     */
    public $device;
    protected $_name = [
        'apiProduct'        => 'ApiProduct',
        'apiRevision'       => 'ApiRevision',
        'iotInstanceId'     => 'IotInstanceId',
        'groupId'           => 'GroupId',
        'realTenantId'      => 'RealTenantId',
        'realTripartiteKey' => 'RealTripartiteKey',
        'device'            => 'Device',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->realTenantId) {
            $res['RealTenantId'] = $this->realTenantId;
        }
        if (null !== $this->realTripartiteKey) {
            $res['RealTripartiteKey'] = $this->realTripartiteKey;
        }
        if (null !== $this->device) {
            $res['Device'] = [];
            if (null !== $this->device && \is_array($this->device)) {
                $n = 0;
                foreach ($this->device as $item) {
                    $res['Device'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDeviceGroupRelationsRequest
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RealTenantId'])) {
            $model->realTenantId = $map['RealTenantId'];
        }
        if (isset($map['RealTripartiteKey'])) {
            $model->realTripartiteKey = $map['RealTripartiteKey'];
        }
        if (isset($map['Device'])) {
            if (!empty($map['Device'])) {
                $model->device = [];
                $n             = 0;
                foreach ($map['Device'] as $item) {
                    $model->device[$n++] = null !== $item ? device::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
