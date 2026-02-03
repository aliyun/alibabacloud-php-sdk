<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CacheCluster\vSwitches;

class CacheCluster extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $deployInstanceVersion;

    /**
     * @var int
     */
    public $deployOptionsVersion;

    /**
     * @var string
     */
    public $instanceVersion;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var int
     */
    public $optionsVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $updatedBy;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId' => 'clusterId',
        'clusterName' => 'clusterName',
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'deployInstanceVersion' => 'deployInstanceVersion',
        'deployOptionsVersion' => 'deployOptionsVersion',
        'instanceVersion' => 'instanceVersion',
        'options' => 'options',
        'optionsVersion' => 'optionsVersion',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
        'vSwitches' => 'vSwitches',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->deployInstanceVersion) {
            $res['deployInstanceVersion'] = $this->deployInstanceVersion;
        }

        if (null !== $this->deployOptionsVersion) {
            $res['deployOptionsVersion'] = $this->deployOptionsVersion;
        }

        if (null !== $this->instanceVersion) {
            $res['instanceVersion'] = $this->instanceVersion;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->optionsVersion) {
            $res['optionsVersion'] = $this->optionsVersion;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
        }

        if (null !== $this->vSwitches) {
            if (\is_array($this->vSwitches)) {
                $res['vSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['vSwitches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['deployInstanceVersion'])) {
            $model->deployInstanceVersion = $map['deployInstanceVersion'];
        }

        if (isset($map['deployOptionsVersion'])) {
            $model->deployOptionsVersion = $map['deployOptionsVersion'];
        }

        if (isset($map['instanceVersion'])) {
            $model->instanceVersion = $map['instanceVersion'];
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                foreach ($map['options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['optionsVersion'])) {
            $model->optionsVersion = $map['optionsVersion'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }

        if (isset($map['vSwitches'])) {
            if (!empty($map['vSwitches'])) {
                $model->vSwitches = [];
                $n1 = 0;
                foreach ($map['vSwitches'] as $item1) {
                    $model->vSwitches[$n1] = vSwitches::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
