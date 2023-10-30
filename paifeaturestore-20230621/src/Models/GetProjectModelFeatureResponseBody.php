<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetProjectModelFeatureResponseBody\features;
use AlibabaCloud\Tea\Model;

class GetProjectModelFeatureResponseBody extends Model
{
    /**
     * @var features[]
     */
    public $features;

    /**
     * @example 2023-07-04T14:46:22.227+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-07-04T14:46:22.227+08:00
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 3
     *
     * @var string
     */
    public $labelDatasourceId;

    /**
     * @example table1
     *
     * @var string
     */
    public $labelDatasourceTable;

    /**
     * @example dt
     *
     * @var string
     */
    public $labelEventTime;

    /**
     * @example 3
     *
     * @var string
     */
    public $labelTableId;

    /**
     * @example 3
     *
     * @var string
     */
    public $modelFeatureId;

    /**
     * @example model_feature_1
     *
     * @var string
     */
    public $name;

    /**
     * @example 12324325324****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 3
     *
     * @var string
     */
    public $projectId;

    /**
     * @example project1
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 6B662A64-E4BF-56F8-BF5F-4C63F34EC0A8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example table2
     *
     * @var string
     */
    public $trainingSetFGTable;

    /**
     * @example model_feature_xxx_training_set
     *
     * @var string
     */
    public $trainingSetTable;
    protected $_name = [
        'features'             => 'Features',
        'gmtCreateTime'        => 'GmtCreateTime',
        'gmtModifiedTime'      => 'GmtModifiedTime',
        'labelDatasourceId'    => 'LabelDatasourceId',
        'labelDatasourceTable' => 'LabelDatasourceTable',
        'labelEventTime'       => 'LabelEventTime',
        'labelTableId'         => 'LabelTableId',
        'modelFeatureId'       => 'ModelFeatureId',
        'name'                 => 'Name',
        'owner'                => 'Owner',
        'projectId'            => 'ProjectId',
        'projectName'          => 'ProjectName',
        'requestId'            => 'RequestId',
        'trainingSetFGTable'   => 'TrainingSetFGTable',
        'trainingSetTable'     => 'TrainingSetTable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->features) {
            $res['Features'] = [];
            if (null !== $this->features && \is_array($this->features)) {
                $n = 0;
                foreach ($this->features as $item) {
                    $res['Features'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->labelDatasourceId) {
            $res['LabelDatasourceId'] = $this->labelDatasourceId;
        }
        if (null !== $this->labelDatasourceTable) {
            $res['LabelDatasourceTable'] = $this->labelDatasourceTable;
        }
        if (null !== $this->labelEventTime) {
            $res['LabelEventTime'] = $this->labelEventTime;
        }
        if (null !== $this->labelTableId) {
            $res['LabelTableId'] = $this->labelTableId;
        }
        if (null !== $this->modelFeatureId) {
            $res['ModelFeatureId'] = $this->modelFeatureId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trainingSetFGTable) {
            $res['TrainingSetFGTable'] = $this->trainingSetFGTable;
        }
        if (null !== $this->trainingSetTable) {
            $res['TrainingSetTable'] = $this->trainingSetTable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectModelFeatureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n               = 0;
                foreach ($map['Features'] as $item) {
                    $model->features[$n++] = null !== $item ? features::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['LabelDatasourceId'])) {
            $model->labelDatasourceId = $map['LabelDatasourceId'];
        }
        if (isset($map['LabelDatasourceTable'])) {
            $model->labelDatasourceTable = $map['LabelDatasourceTable'];
        }
        if (isset($map['LabelEventTime'])) {
            $model->labelEventTime = $map['LabelEventTime'];
        }
        if (isset($map['LabelTableId'])) {
            $model->labelTableId = $map['LabelTableId'];
        }
        if (isset($map['ModelFeatureId'])) {
            $model->modelFeatureId = $map['ModelFeatureId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrainingSetFGTable'])) {
            $model->trainingSetFGTable = $map['TrainingSetFGTable'];
        }
        if (isset($map['TrainingSetTable'])) {
            $model->trainingSetTable = $map['TrainingSetTable'];
        }

        return $model;
    }
}
