<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resGroupName;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $cronExpress;

    /**
     * @var string
     */
    public $repeatability;

    /**
     * @var string
     */
    public $programType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $paramValues;
    protected $_name = [
        'nodeId'        => 'NodeId',
        'ownerId'       => 'OwnerId',
        'description'   => 'Description',
        'resGroupName'  => 'ResGroupName',
        'nodeName'      => 'NodeName',
        'cronExpress'   => 'CronExpress',
        'repeatability' => 'Repeatability',
        'programType'   => 'ProgramType',
        'projectId'     => 'ProjectId',
        'schedulerType' => 'SchedulerType',
        'paramValues'   => 'ParamValues',
    ];

    public function validate()
    {
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('resGroupName', $this->resGroupName, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('cronExpress', $this->cronExpress, true);
        Model::validateRequired('repeatability', $this->repeatability, true);
        Model::validateRequired('programType', $this->programType, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('schedulerType', $this->schedulerType, true);
        Model::validateRequired('paramValues', $this->paramValues, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resGroupName) {
            $res['ResGroupName'] = $this->resGroupName;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }
        if (null !== $this->repeatability) {
            $res['Repeatability'] = $this->repeatability;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->paramValues) {
            $res['ParamValues'] = $this->paramValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResGroupName'])) {
            $model->resGroupName = $map['ResGroupName'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }
        if (isset($map['Repeatability'])) {
            $model->repeatability = $map['Repeatability'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['ParamValues'])) {
            $model->paramValues = $map['ParamValues'];
        }

        return $model;
    }
}
