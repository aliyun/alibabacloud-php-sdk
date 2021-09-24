<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponse\data;

use AlibabaCloud\Tea\Model;

class solutionDetail extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $processContent;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $processExtra;
    protected $_name = [
        'id'             => 'Id',
        'type'           => 'Type',
        'projectId'      => 'ProjectId',
        'status'         => 'Status',
        'processContent' => 'ProcessContent',
        'startTime'      => 'StartTime',
        'name'           => 'Name',
        'creatorName'    => 'CreatorName',
        'sourceType'     => 'SourceType',
        'submitTime'     => 'SubmitTime',
        'processExtra'   => 'ProcessExtra',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('processContent', $this->processContent, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('creatorName', $this->creatorName, true);
        Model::validateRequired('sourceType', $this->sourceType, true);
        Model::validateRequired('submitTime', $this->submitTime, true);
        Model::validateRequired('processExtra', $this->processExtra, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->processContent) {
            $res['ProcessContent'] = $this->processContent;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->processExtra) {
            $res['ProcessExtra'] = $this->processExtra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return solutionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ProcessContent'])) {
            $model->processContent = $map['ProcessContent'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['ProcessExtra'])) {
            $model->processExtra = $map['ProcessExtra'];
        }

        return $model;
    }
}
