<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOpaClusterStrategyNewResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The action of the rule. Valid values:
     *
     *   **1**: trigger alerts
     *   **2**: block
     *   **3**: allow
     *
     * @example 1
     *
     * @var int
     */
    public $action;

    /**
     * @description The number of clusters on which the rule takes effect.
     *
     * @example 1
     *
     * @var int
     */
    public $clusterCount;

    /**
     * @description The clusters on which the rule takes effect.
     *
     * @var string[]
     */
    public $clusterIdList;

    /**
     * @description The description.
     *
     * @example Config the Event Audit policys
     *
     * @var string
     */
    public $description;

    /**
     * @description The image names.
     *
     * @var string[]
     */
    public $imageName;

    /**
     * @description The tags that are added to the container.
     *
     * @var string[]
     */
    public $label;

    /**
     * @description Indicates whether the rule supports malicious Internet images. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $maliciousImage;

    /**
     * @description The rule ID.
     *
     * @example 1
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The rule name.
     *
     * @example auto-strategy-vohuiq
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description Indicates whether the rule supports unscanned images. Valid values:
     *
     *   **true**
     *   **false**
     *
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
