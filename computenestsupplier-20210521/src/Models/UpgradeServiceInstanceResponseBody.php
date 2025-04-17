<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class UpgradeServiceInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $upgradeRequiredParameters;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'status' => 'Status',
        'upgradeRequiredParameters' => 'UpgradeRequiredParameters',
    ];

    public function validate()
    {
        if (\is_array($this->upgradeRequiredParameters)) {
            Model::validateArray($this->upgradeRequiredParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->upgradeRequiredParameters) {
            if (\is_array($this->upgradeRequiredParameters)) {
                $res['UpgradeRequiredParameters'] = [];
                $n1 = 0;
                foreach ($this->upgradeRequiredParameters as $item1) {
                    $res['UpgradeRequiredParameters'][$n1++] = $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpgradeRequiredParameters'])) {
            if (!empty($map['UpgradeRequiredParameters'])) {
                $model->upgradeRequiredParameters = [];
                $n1 = 0;
                foreach ($map['UpgradeRequiredParameters'] as $item1) {
                    $model->upgradeRequiredParameters[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
