<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponseBody\clusters\accessLogDashboards;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var accessLogDashboards[]
     */
    public $accessLogDashboards;

    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $logtailInstalledState;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sgId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $version;

    /**
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
