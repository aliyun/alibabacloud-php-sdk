<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;

class QuickDeployClusterRequest extends Model
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
     * @var string[]
     */
    public $instanceList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $vSwitchIdList;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'certManaged' => 'CertManaged',
        'clusterName' => 'ClusterName',
        'instanceList' => 'InstanceList',
        'regionId' => 'RegionId',
        'vSwitchIdList' => 'VSwitchIdList',
        'vpcId' => 'VpcId',
        'whiteList' => 'WhiteList',
    ];

    public function validate()
    {
        if (\is_array($this->instanceList)) {
            Model::validateArray($this->instanceList);
        }
        if (\is_array($this->vSwitchIdList)) {
            Model::validateArray($this->vSwitchIdList);
        }
        if (\is_array($this->whiteList)) {
            Model::validateArray($this->whiteList);
        }
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

        if (null !== $this->instanceList) {
            if (\is_array($this->instanceList)) {
                $res['InstanceList'] = [];
                $n1 = 0;
                foreach ($this->instanceList as $item1) {
                    $res['InstanceList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vSwitchIdList) {
            if (\is_array($this->vSwitchIdList)) {
                $res['VSwitchIdList'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIdList as $item1) {
                    $res['VSwitchIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->whiteList) {
            if (\is_array($this->whiteList)) {
                $res['WhiteList'] = [];
                $n1 = 0;
                foreach ($this->whiteList as $item1) {
                    $res['WhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['InstanceList'])) {
                $model->instanceList = [];
                $n1 = 0;
                foreach ($map['InstanceList'] as $item1) {
                    $model->instanceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VSwitchIdList'])) {
            if (!empty($map['VSwitchIdList'])) {
                $model->vSwitchIdList = [];
                $n1 = 0;
                foreach ($map['VSwitchIdList'] as $item1) {
                    $model->vSwitchIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = [];
                $n1 = 0;
                foreach ($map['WhiteList'] as $item1) {
                    $model->whiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
