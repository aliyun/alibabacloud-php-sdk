<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusInstanceRequest\tags;

class CreatePrometheusInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $allSubClustersSuccess;

    /**
     * @var int
     */
    public $archiveDuration;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $grafanaInstanceId;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $subClustersJson;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'allSubClustersSuccess' => 'AllSubClustersSuccess',
        'archiveDuration' => 'ArchiveDuration',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'clusterType' => 'ClusterType',
        'duration' => 'Duration',
        'grafanaInstanceId' => 'GrafanaInstanceId',
        'paymentType' => 'PaymentType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupId' => 'SecurityGroupId',
        'subClustersJson' => 'SubClustersJson',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allSubClustersSuccess) {
            $res['AllSubClustersSuccess'] = $this->allSubClustersSuccess;
        }

        if (null !== $this->archiveDuration) {
            $res['ArchiveDuration'] = $this->archiveDuration;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->grafanaInstanceId) {
            $res['GrafanaInstanceId'] = $this->grafanaInstanceId;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->subClustersJson) {
            $res['SubClustersJson'] = $this->subClustersJson;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AllSubClustersSuccess'])) {
            $model->allSubClustersSuccess = $map['AllSubClustersSuccess'];
        }

        if (isset($map['ArchiveDuration'])) {
            $model->archiveDuration = $map['ArchiveDuration'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['GrafanaInstanceId'])) {
            $model->grafanaInstanceId = $map['GrafanaInstanceId'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SubClustersJson'])) {
            $model->subClustersJson = $map['SubClustersJson'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
