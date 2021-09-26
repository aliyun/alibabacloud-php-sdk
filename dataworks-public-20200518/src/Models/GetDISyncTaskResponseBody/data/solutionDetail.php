<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class solutionDetail extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $processContent;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $processExtra;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'         => 'Status',
        'type'           => 'Type',
        'startTime'      => 'StartTime',
        'creatorName'    => 'CreatorName',
        'projectId'      => 'ProjectId',
        'sourceType'     => 'SourceType',
        'processContent' => 'ProcessContent',
        'name'           => 'Name',
        'processExtra'   => 'ProcessExtra',
        'submitTime'     => 'SubmitTime',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->processContent) {
            $res['ProcessContent'] = $this->processContent;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->processExtra) {
            $res['ProcessExtra'] = $this->processExtra;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['ProcessContent'])) {
            $model->processContent = $map['ProcessContent'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProcessExtra'])) {
            $model->processExtra = $map['ProcessExtra'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
