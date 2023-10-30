<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\features;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\relations;
use AlibabaCloud\Tea\Model;

class GetModelFeatureResponseBody extends Model
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
    public $labelTableId;

    /**
     * @example label_table1
     *
     * @var string
     */
    public $labelTableName;

    /**
     * @example model_feature1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1231243253****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 5
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
     * @var relations
     */
    public $relations;

    /**
     * @example 0C89F5E1-7F24-5EEC-9F05-508A39278CC8
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
     * @example table1
     *
     * @var string
     */
    public $trainingSetTable;
    protected $_name = [
        'features'           => 'Features',
        'gmtCreateTime'      => 'GmtCreateTime',
        'gmtModifiedTime'    => 'GmtModifiedTime',
        'labelTableId'       => 'LabelTableId',
        'labelTableName'     => 'LabelTableName',
        'name'               => 'Name',
        'owner'              => 'Owner',
        'projectId'          => 'ProjectId',
        'projectName'        => 'ProjectName',
        'relations'          => 'Relations',
        'requestId'          => 'RequestId',
        'trainingSetFGTable' => 'TrainingSetFGTable',
        'trainingSetTable'   => 'TrainingSetTable',
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
        if (null !== $this->labelTableId) {
            $res['LabelTableId'] = $this->labelTableId;
        }
        if (null !== $this->labelTableName) {
            $res['LabelTableName'] = $this->labelTableName;
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
        if (null !== $this->relations) {
            $res['Relations'] = null !== $this->relations ? $this->relations->toMap() : null;
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
     * @return GetModelFeatureResponseBody
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
        if (isset($map['LabelTableId'])) {
            $model->labelTableId = $map['LabelTableId'];
        }
        if (isset($map['LabelTableName'])) {
            $model->labelTableName = $map['LabelTableName'];
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
        if (isset($map['Relations'])) {
            $model->relations = relations::fromMap($map['Relations']);
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
