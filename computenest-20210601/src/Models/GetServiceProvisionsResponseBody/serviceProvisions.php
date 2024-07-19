<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsResponseBody;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsResponseBody\serviceProvisions\roleProvision;
use AlibabaCloud\Tea\Model;

class serviceProvisions extends Model
{
    /**
     * @description Indicates whether automatic activation for the service is defined in the template. Valid values:
     *
     *   true: Automatic activation for the service is defined in the template.
     *   false: Manual activation for the service is defined in the template.
     *
     * @example true
     *
     * @var bool
     */
    public $autoEnableService;

    /**
     * @description The URL that points to the activation page of the service.
     *
     * > This parameter is returned if Status is set to Disabled.
     * @example https://common-buy.aliyun.com/?commodityCode=sls
     *
     * @var string
     */
    public $enableURL;

    /**
     * @description The information about the RAM roles of the service. If this parameter is empty, no RAM role is associated with the service.
     *
     * @var roleProvision
     */
    public $roleProvision;

    /**
     * @description The service name.
     *
     * @example CS
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The activation status of the service. Valid values:
     *
     *   Enabled: The service is activated.
     *   Disabled: The service is not activated.
     *   Unknown: The activation status of the service is unknown.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the service is in the Disabled or Unknown state.
     *
     * > This parameter is returned if Status is set to Disabled or Unknown.
     * @example No permission
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'autoEnableService' => 'AutoEnableService',
        'enableURL'         => 'EnableURL',
        'roleProvision'     => 'RoleProvision',
        'serviceName'       => 'ServiceName',
        'status'            => 'Status',
        'statusReason'      => 'StatusReason',
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
