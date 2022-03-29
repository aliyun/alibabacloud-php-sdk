<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeManagedServicesResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeManagedServicesResponseBody\managedServiceInfo\deploymentInstances;
use AlibabaCloud\Tea\Model;

class managedServiceInfo extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var deploymentInstances[]
     */
    public $deploymentInstances;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string[]
     */
    public $selector;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $sidecarInjectStatus;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'deploymentInstances' => 'DeploymentInstances',
        'message'             => 'Message',
        'selector'            => 'Selector',
        'serviceName'         => 'ServiceName',
        'sidecarInjectStatus' => 'SidecarInjectStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deploymentInstances) {
            $res['DeploymentInstances'] = [];
            if (null !== $this->deploymentInstances && \is_array($this->deploymentInstances)) {
                $n = 0;
                foreach ($this->deploymentInstances as $item) {
                    $res['DeploymentInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->selector) {
            $res['Selector'] = $this->selector;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->sidecarInjectStatus) {
            $res['SidecarInjectStatus'] = $this->sidecarInjectStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedServiceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeploymentInstances'])) {
            if (!empty($map['DeploymentInstances'])) {
                $model->deploymentInstances = [];
                $n                          = 0;
                foreach ($map['DeploymentInstances'] as $item) {
                    $model->deploymentInstances[$n++] = null !== $item ? deploymentInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Selector'])) {
            $model->selector = $map['Selector'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SidecarInjectStatus'])) {
            $model->sidecarInjectStatus = $map['SidecarInjectStatus'];
        }

        return $model;
    }
}
