<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeleteDeliveryArchVersionRequest extends Model
{
    /**
     * @var string
     */
    public $deliveryArchVersionId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'deliveryArchVersionId' => 'DeliveryArchVersionId',
        'instanceId'            => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryArchVersionId) {
            $res['DeliveryArchVersionId'] = $this->deliveryArchVersionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDeliveryArchVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryArchVersionId'])) {
            $model->deliveryArchVersionId = $map['DeliveryArchVersionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
