<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterRequest extends Model
{
    /**
     * @description 集群是否绑定EIP，用于公网访问API Server。 true | false
     *
     * @var bool
     */
    public $apiServerEip;

    /**
     * @description 集群API Server 公网连接端点。
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description 集群是否开启删除保护。默认值false。
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description 实例删除保护，防止通过控制台或API误删除释放节点。
     *
     * @var bool
     */
    public $instanceDeletionProtection;

    /**
     * @description 域名是否重新绑定到Ingress的SLB地址。
     *
     * @var string
     */
    public $ingressDomainRebinding;

    /**
     * @description 集群的Ingress SLB的ID。
     *
     * @var string
     */
    public $ingressLoadbalancerId;

    /**
     * @description 集群资源组ID。
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;
    protected $_name = [
        'apiServerEip'               => 'api_server_eip',
        'apiServerEipId'             => 'api_server_eip_id',
        'deletionProtection'         => 'deletion_protection',
        'instanceDeletionProtection' => 'instance_deletion_protection',
        'ingressDomainRebinding'     => 'ingress_domain_rebinding',
        'ingressLoadbalancerId'      => 'ingress_loadbalancer_id',
        'resourceGroupId'            => 'resource_group_id',
        'maintenanceWindow'          => 'maintenance_window',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerEip) {
            $res['api_server_eip'] = $this->apiServerEip;
        }
        if (null !== $this->apiServerEipId) {
            $res['api_server_eip_id'] = $this->apiServerEipId;
        }
        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }
        if (null !== $this->instanceDeletionProtection) {
            $res['instance_deletion_protection'] = $this->instanceDeletionProtection;
        }
        if (null !== $this->ingressDomainRebinding) {
            $res['ingress_domain_rebinding'] = $this->ingressDomainRebinding;
        }
        if (null !== $this->ingressLoadbalancerId) {
            $res['ingress_loadbalancer_id'] = $this->ingressLoadbalancerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->maintenanceWindow) {
            $res['maintenance_window'] = null !== $this->maintenanceWindow ? $this->maintenanceWindow->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['api_server_eip'])) {
            $model->apiServerEip = $map['api_server_eip'];
        }
        if (isset($map['api_server_eip_id'])) {
            $model->apiServerEipId = $map['api_server_eip_id'];
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['instance_deletion_protection'])) {
            $model->instanceDeletionProtection = $map['instance_deletion_protection'];
        }
        if (isset($map['ingress_domain_rebinding'])) {
            $model->ingressDomainRebinding = $map['ingress_domain_rebinding'];
        }
        if (isset($map['ingress_loadbalancer_id'])) {
            $model->ingressLoadbalancerId = $map['ingress_loadbalancer_id'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['maintenance_window'])) {
            $model->maintenanceWindow = MaintenanceWindow::fromMap($map['maintenance_window']);
        }

        return $model;
    }
}
