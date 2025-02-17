<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceInstanceAttributesRequest extends Model
{
    /**
     * @var bool
     */
    public $enableOperation;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'enableOperation'   => 'EnableOperation',
        'regionId'          => 'RegionId',
        'serviceInstanceId' => 'ServiceInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableOperation) {
            $res['EnableOperation'] = $this->enableOperation;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableOperation'])) {
            $model->enableOperation = $map['EnableOperation'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}
