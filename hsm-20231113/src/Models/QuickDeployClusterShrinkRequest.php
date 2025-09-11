<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;

class QuickDeployClusterShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $certManaged;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $instanceListShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vSwitchIdListShrink;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $whiteListShrink;
    protected $_name = [
        'certManaged' => 'CertManaged',
        'clusterName' => 'ClusterName',
        'instanceListShrink' => 'InstanceList',
        'regionId' => 'RegionId',
        'vSwitchIdListShrink' => 'VSwitchIdList',
        'vpcId' => 'VpcId',
        'whiteListShrink' => 'WhiteList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certManaged) {
            $res['CertManaged'] = $this->certManaged;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->instanceListShrink) {
            $res['InstanceList'] = $this->instanceListShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vSwitchIdListShrink) {
            $res['VSwitchIdList'] = $this->vSwitchIdListShrink;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->whiteListShrink) {
            $res['WhiteList'] = $this->whiteListShrink;
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
        if (isset($map['CertManaged'])) {
            $model->certManaged = $map['CertManaged'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['InstanceList'])) {
            $model->instanceListShrink = $map['InstanceList'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VSwitchIdList'])) {
            $model->vSwitchIdListShrink = $map['VSwitchIdList'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['WhiteList'])) {
            $model->whiteListShrink = $map['WhiteList'];
        }

        return $model;
    }
}
