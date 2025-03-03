<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class CreateDatasetJobRequest extends Model
{
    /**
     * @var string
     */
    public $datasetVersion;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $jobAction;
    /**
     * @var string
     */
    public $jobMode;
    /**
     * @var string
     */
    public $jobSpec;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetVersion' => 'DatasetVersion',
        'description'    => 'Description',
        'jobAction'      => 'JobAction',
        'jobMode'        => 'JobMode',
        'jobSpec'        => 'JobSpec',
        'workspaceId'    => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->jobAction) {
            $res['JobAction'] = $this->jobAction;
        }

        if (null !== $this->jobMode) {
            $res['JobMode'] = $this->jobMode;
        }

        if (null !== $this->jobSpec) {
            $res['JobSpec'] = $this->jobSpec;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['JobAction'])) {
            $model->jobAction = $map['JobAction'];
        }

        if (isset($map['JobMode'])) {
            $model->jobMode = $map['JobMode'];
        }

        if (isset($map['JobSpec'])) {
            $model->jobSpec = $map['JobSpec'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
