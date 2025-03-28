<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody\serviceProvisions\roleProvision;

class serviceProvisions extends Model
{
    /**
     * @var bool
     */
    public $autoEnableService;

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
        'dependentServiceNames' => 'DependentServiceNames',
        'enableURL' => 'EnableURL',
        'roleProvision' => 'RoleProvision',
        'serviceName' => 'ServiceName',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
    ];

    public function validate()
    {
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

        if (null !== $this->dependentServiceNames) {
            if (\is_array($this->dependentServiceNames)) {
                $res['DependentServiceNames'] = [];
                $n1 = 0;
                foreach ($this->dependentServiceNames as $item1) {
                    $res['DependentServiceNames'][$n1++] = $item1;
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

        if (isset($map['DependentServiceNames'])) {
            if (!empty($map['DependentServiceNames'])) {
                $model->dependentServiceNames = [];
                $n1 = 0;
                foreach ($map['DependentServiceNames'] as $item1) {
                    $model->dependentServiceNames[$n1++] = $item1;
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
