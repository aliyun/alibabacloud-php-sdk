<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOpaClusterStrategyNewResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $action;

    /**
     * @var int
     */
    public $clusterCount;

    /**
     * @var string[]
     */
    public $clusterIdList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $imageName;

    /**
     * @var string[]
     */
    public $label;

    /**
     * @var bool
     */
    public $maliciousImage;

    /**
     * @var int
     */
    public $strategyId;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var bool
     */
    public $unScanedImage;
    protected $_name = [
        'action' => 'Action',
        'clusterCount' => 'ClusterCount',
        'clusterIdList' => 'ClusterIdList',
        'description' => 'Description',
        'imageName' => 'ImageName',
        'label' => 'Label',
        'maliciousImage' => 'MaliciousImage',
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'unScanedImage' => 'UnScanedImage',
    ];

    public function validate()
    {
        if (\is_array($this->clusterIdList)) {
            Model::validateArray($this->clusterIdList);
        }
        if (\is_array($this->imageName)) {
            Model::validateArray($this->imageName);
        }
        if (\is_array($this->label)) {
            Model::validateArray($this->label);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }

        if (null !== $this->clusterIdList) {
            if (\is_array($this->clusterIdList)) {
                $res['ClusterIdList'] = [];
                $n1 = 0;
                foreach ($this->clusterIdList as $item1) {
                    $res['ClusterIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->imageName) {
            if (\is_array($this->imageName)) {
                $res['ImageName'] = [];
                $n1 = 0;
                foreach ($this->imageName as $item1) {
                    $res['ImageName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->label) {
            if (\is_array($this->label)) {
                $res['Label'] = [];
                $n1 = 0;
                foreach ($this->label as $item1) {
                    $res['Label'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maliciousImage) {
            $res['MaliciousImage'] = $this->maliciousImage;
        }

        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        if (null !== $this->unScanedImage) {
            $res['UnScanedImage'] = $this->unScanedImage;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }

        if (isset($map['ClusterIdList'])) {
            if (!empty($map['ClusterIdList'])) {
                $model->clusterIdList = [];
                $n1 = 0;
                foreach ($map['ClusterIdList'] as $item1) {
                    $model->clusterIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImageName'])) {
            if (!empty($map['ImageName'])) {
                $model->imageName = [];
                $n1 = 0;
                foreach ($map['ImageName'] as $item1) {
                    $model->imageName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Label'])) {
            if (!empty($map['Label'])) {
                $model->label = [];
                $n1 = 0;
                foreach ($map['Label'] as $item1) {
                    $model->label[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaliciousImage'])) {
            $model->maliciousImage = $map['MaliciousImage'];
        }

        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        if (isset($map['UnScanedImage'])) {
            $model->unScanedImage = $map['UnScanedImage'];
        }

        return $model;
    }
}
