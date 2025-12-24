<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookResponseBody;

use AlibabaCloud\Dara\Model;

class playbook extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $failExeNum;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $inputParams;

    /**
     * @var int
     */
    public $lastExeTime;

    /**
     * @var bool
     */
    public $onlineActive;

    /**
     * @var string
     */
    public $onlineReleaseTaskflowMd5;

    /**
     * @var string
     */
    public $ownType;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var int
     */
    public $successExeNum;

    /**
     * @var string
     */
    public $taskflow;

    /**
     * @var string
     */
    public $taskflowType;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'failExeNum' => 'FailExeNum',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'inputParams' => 'InputParams',
        'lastExeTime' => 'LastExeTime',
        'onlineActive' => 'OnlineActive',
        'onlineReleaseTaskflowMd5' => 'OnlineReleaseTaskflowMd5',
        'ownType' => 'OwnType',
        'playbookUuid' => 'PlaybookUuid',
        'successExeNum' => 'SuccessExeNum',
        'taskflow' => 'Taskflow',
        'taskflowType' => 'TaskflowType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->failExeNum) {
            $res['FailExeNum'] = $this->failExeNum;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }

        if (null !== $this->lastExeTime) {
            $res['LastExeTime'] = $this->lastExeTime;
        }

        if (null !== $this->onlineActive) {
            $res['OnlineActive'] = $this->onlineActive;
        }

        if (null !== $this->onlineReleaseTaskflowMd5) {
            $res['OnlineReleaseTaskflowMd5'] = $this->onlineReleaseTaskflowMd5;
        }

        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->successExeNum) {
            $res['SuccessExeNum'] = $this->successExeNum;
        }

        if (null !== $this->taskflow) {
            $res['Taskflow'] = $this->taskflow;
        }

        if (null !== $this->taskflowType) {
            $res['TaskflowType'] = $this->taskflowType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['FailExeNum'])) {
            $model->failExeNum = $map['FailExeNum'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }

        if (isset($map['LastExeTime'])) {
            $model->lastExeTime = $map['LastExeTime'];
        }

        if (isset($map['OnlineActive'])) {
            $model->onlineActive = $map['OnlineActive'];
        }

        if (isset($map['OnlineReleaseTaskflowMd5'])) {
            $model->onlineReleaseTaskflowMd5 = $map['OnlineReleaseTaskflowMd5'];
        }

        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['SuccessExeNum'])) {
            $model->successExeNum = $map['SuccessExeNum'];
        }

        if (isset($map['Taskflow'])) {
            $model->taskflow = $map['Taskflow'];
        }

        if (isset($map['TaskflowType'])) {
            $model->taskflowType = $map['TaskflowType'];
        }

        return $model;
    }
}
