<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponseBody\clusters\accessLogDashboards;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The configurations of access log collection.
     *
     * @var accessLogDashboards[]
     */
    public $accessLogDashboards;

    /**
     * @description The domain of the cluster.
     *
     * @example example.com
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @description The ID of the cluster.
     *
     * @example c80f45444b3da447da60a911390c2****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the cluster.
     *
     * @example Ask
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The point in time when the cluster was created.
     *
     * @example 2020-05-12T15:38:16+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The error message that is returned when the call failed.
     *
     * @example ,
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the Logtail component is installed in the cluster. Valid values:
     *
     *   `logtail_installed`: The Logtail component is installed.
     *
     * \-`logtail_uninstalled`: The Logtail component is not installed.
     *
     *   `logtail_state_get_error`: The Logtail component fails to be installed.
     *
     * @example logtail_installed
     *
     * @var string
     */
    public $logtailInstalledState;

    /**
     * @description The name of the cluster.
     *
     * @example ask1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region in which the cluster resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp197668l6iupljy****
     *
     * @var string
     */
    public $sgId;

    /**
     * @description The status of the cluster.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The point in time when the cluster was last modified.
     *
     * @example 2020-05-12T15:38:16+08:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The version number of the cluster.
     *
     * @example v1.16.6-aliyun.1
     *
     * @var string
     */
    public $version;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-2zew0rajjkmxy2369****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessLogDashboards'   => 'AccessLogDashboards',
        'clusterDomain'         => 'ClusterDomain',
        'clusterId'             => 'ClusterId',
        'clusterType'           => 'ClusterType',
        'creationTime'          => 'CreationTime',
        'errorMessage'          => 'ErrorMessage',
        'logtailInstalledState' => 'LogtailInstalledState',
        'name'                  => 'Name',
        'regionId'              => 'RegionId',
        'sgId'                  => 'SgId',
        'state'                 => 'State',
        'updateTime'            => 'UpdateTime',
        'version'               => 'Version',
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogDashboards) {
            $res['AccessLogDashboards'] = [];
            if (null !== $this->accessLogDashboards && \is_array($this->accessLogDashboards)) {
                $n = 0;
                foreach ($this->accessLogDashboards as $item) {
                    $res['AccessLogDashboards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->logtailInstalledState) {
            $res['LogtailInstalledState'] = $this->logtailInstalledState;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sgId) {
            $res['SgId'] = $this->sgId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogDashboards'])) {
            if (!empty($map['AccessLogDashboards'])) {
                $model->accessLogDashboards = [];
                $n                          = 0;
                foreach ($map['AccessLogDashboards'] as $item) {
                    $model->accessLogDashboards[$n++] = null !== $item ? accessLogDashboards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['LogtailInstalledState'])) {
            $model->logtailInstalledState = $map['LogtailInstalledState'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SgId'])) {
            $model->sgId = $map['SgId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
