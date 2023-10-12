<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeleteDeliveryProjectRequest extends Model
{
    /**
     * @var string
     */
    public $deliveryProjectId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'deliveryProjectId' => 'DeliveryProjectId',
        'instanceId'        => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryProjectId) {
            $res['DeliveryProjectId'] = $this->deliveryProjectId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDeliveryProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryProjectId'])) {
            $model->deliveryProjectId = $map['DeliveryProjectId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
