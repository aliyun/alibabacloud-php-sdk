<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody\serviceProvisions\roleProvision;
use AlibabaCloud\Tea\Model;

class serviceProvisions extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoEnableService;

    /**
     * @var string[]
     */
    public $dependentServiceNames;

    /**
     * @example https://common-buy.aliyun.com/?commodityCode=nas
     *
     * @var string
     */
    public $enableURL;

    /**
     * @var roleProvision
     */
    public $roleProvision;

    /**
     * @example EHPC
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example No permission.
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'autoEnableService'     => 'AutoEnableService',
        'dependentServiceNames' => 'DependentServiceNames',
        'enableURL'             => 'EnableURL',
        'roleProvision'         => 'RoleProvision',
        'serviceName'           => 'ServiceName',
        'status'                => 'Status',
        'statusReason'          => 'StatusReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoEnableService) {
            $res['AutoEnableService'] = $this->autoEnableService;
        }
        if (null !== $this->dependentServiceNames) {
            $res['DependentServiceNames'] = $this->dependentServiceNames;
        }
        if (null !== $this->enableURL) {
            $res['EnableURL'] = $this->enableURL;
        }
        if (null !== $this->roleProvision) {
            $res['RoleProvision'] = null !== $this->roleProvision ? $this->roleProvision->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return serviceProvisions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoEnableService'])) {
            $model->autoEnableService = $map['AutoEnableService'];
        }
        if (isset($map['DependentServiceNames'])) {
            if (!empty($map['DependentServiceNames'])) {
                $model->dependentServiceNames = $map['DependentServiceNames'];
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
