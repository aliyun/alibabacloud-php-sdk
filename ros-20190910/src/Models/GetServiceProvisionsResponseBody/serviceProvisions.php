<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody\serviceProvisions\commodityProvisions;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody\serviceProvisions\roleProvision;

class serviceProvisions extends Model
{
    /**
     * @var bool
     */
    public $autoEnableService;

    /**
     * @var commodityProvisions[]
     */
    public $commodityProvisions;

    /**
     * @var string[]
     */
    public $dependentServiceNames;

    /**
     * @var string
     */
    public $enableURL;

    /**
     * @var roleProvision
     */
    public $roleProvision;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'autoEnableService' => 'AutoEnableService',
        'commodityProvisions' => 'CommodityProvisions',
        'dependentServiceNames' => 'DependentServiceNames',
        'enableURL' => 'EnableURL',
        'roleProvision' => 'RoleProvision',
        'serviceName' => 'ServiceName',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
    ];

    public function validate()
    {
        if (\is_array($this->commodityProvisions)) {
            Model::validateArray($this->commodityProvisions);
        }
        if (\is_array($this->dependentServiceNames)) {
            Model::validateArray($this->dependentServiceNames);
        }
        if (null !== $this->roleProvision) {
            $this->roleProvision->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoEnableService) {
            $res['AutoEnableService'] = $this->autoEnableService;
        }

        if (null !== $this->commodityProvisions) {
            if (\is_array($this->commodityProvisions)) {
                $res['CommodityProvisions'] = [];
                $n1 = 0;
                foreach ($this->commodityProvisions as $item1) {
                    $res['CommodityProvisions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dependentServiceNames) {
            if (\is_array($this->dependentServiceNames)) {
                $res['DependentServiceNames'] = [];
                $n1 = 0;
                foreach ($this->dependentServiceNames as $item1) {
                    $res['DependentServiceNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableURL) {
            $res['EnableURL'] = $this->enableURL;
        }

        if (null !== $this->roleProvision) {
            $res['RoleProvision'] = null !== $this->roleProvision ? $this->roleProvision->toArray($noStream) : $this->roleProvision;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
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
        if (isset($map['AutoEnableService'])) {
            $model->autoEnableService = $map['AutoEnableService'];
        }

        if (isset($map['CommodityProvisions'])) {
            if (!empty($map['CommodityProvisions'])) {
                $model->commodityProvisions = [];
                $n1 = 0;
                foreach ($map['CommodityProvisions'] as $item1) {
                    $model->commodityProvisions[$n1] = commodityProvisions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DependentServiceNames'])) {
            if (!empty($map['DependentServiceNames'])) {
                $model->dependentServiceNames = [];
                $n1 = 0;
                foreach ($map['DependentServiceNames'] as $item1) {
                    $model->dependentServiceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableURL'])) {
            $model->enableURL = $map['EnableURL'];
        }

        if (isset($map['RoleProvision'])) {
            $model->roleProvision = roleProvision::fromMap($map['RoleProvision']);
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
