<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\features;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\relations;

class GetModelFeatureResponseBody extends Model
{
    /**
     * @var string
     */
    public $exportTrainingSetTableScript;

    /**
     * @var features[]
     */
    public $features;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var int
     */
    public $labelPriorityLevel;

    /**
     * @var string
     */
    public $labelTableId;

    /**
     * @var string
     */
    public $labelTableName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var relations
     */
    public $relations;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trainingSetFGTable;

    /**
     * @var string
     */
    public $trainingSetTable;
    protected $_name = [
        'exportTrainingSetTableScript' => 'ExportTrainingSetTableScript',
        'features' => 'Features',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'labelPriorityLevel' => 'LabelPriorityLevel',
        'labelTableId' => 'LabelTableId',
        'labelTableName' => 'LabelTableName',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'relations' => 'Relations',
        'requestId' => 'RequestId',
        'trainingSetFGTable' => 'TrainingSetFGTable',
        'trainingSetTable' => 'TrainingSetTable',
    ];

    public function validate()
    {
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (null !== $this->relations) {
            $this->relations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportTrainingSetTableScript) {
            $res['ExportTrainingSetTableScript'] = $this->exportTrainingSetTableScript;
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['Features'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->labelPriorityLevel) {
            $res['LabelPriorityLevel'] = $this->labelPriorityLevel;
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
            $res['Relations'] = null !== $this->relations ? $this->relations->toArray($noStream) : $this->relations;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportTrainingSetTableScript'])) {
            $model->exportTrainingSetTableScript = $map['ExportTrainingSetTableScript'];
        }

        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['Features'] as $item1) {
                    $model->features[$n1++] = features::fromMap($item1);
                }
            }
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['LabelPriorityLevel'])) {
            $model->labelPriorityLevel = $map['LabelPriorityLevel'];
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
