<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOpaClusterStrategyNewResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $action;

    /**
     * @example 1
     *
     * @var int
     */
    public $clusterCount;

    /**
     * @var string[]
     */
    public $clusterIdList;

    /**
     * @example Config the Event Audit policys
     *
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
     * @example true
     *
     * @var bool
     */
    public $maliciousImage;

    /**
     * @example 1
     *
     * @var int
     */
    public $strategyId;

    /**
     * @example auto-strategy-vohuiq
     *
     * @var string
     */
    public $strategyName;

    /**
     * @example true
     *
     * @var bool
     */
    public $unScanedImage;
    protected $_name = [
        'action'         => 'Action',
        'clusterCount'   => 'ClusterCount',
        'clusterIdList'  => 'ClusterIdList',
        'description'    => 'Description',
        'imageName'      => 'ImageName',
        'label'          => 'Label',
        'maliciousImage' => 'MaliciousImage',
        'strategyId'     => 'StrategyId',
        'strategyName'   => 'StrategyName',
        'unScanedImage'  => 'UnScanedImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }
        if (null !== $this->clusterIdList) {
            $res['ClusterIdList'] = $this->clusterIdList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
                $model->clusterIdList = $map['ClusterIdList'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageName'])) {
            if (!empty($map['ImageName'])) {
                $model->imageName = $map['ImageName'];
            }
        }
        if (isset($map['Label'])) {
            if (!empty($map['Label'])) {
                $model->label = $map['Label'];
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
