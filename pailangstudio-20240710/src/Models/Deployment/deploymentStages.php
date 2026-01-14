<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment;

use AlibabaCloud\Dara\Model;

class deploymentStages extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $gmtEndTime;

    /**
     * @var string
     */
    public $gmtStartTime;

    /**
     * @var int
     */
    public $stage;

    /**
     * @var string
     */
    public $stageInfo;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $stageStatus;
    protected $_name = [
        'description' => 'Description',
        'errorMessage' => 'ErrorMessage',
        'gmtEndTime' => 'GmtEndTime',
        'gmtStartTime' => 'GmtStartTime',
        'stage' => 'Stage',
        'stageInfo' => 'StageInfo',
        'stageName' => 'StageName',
        'stageStatus' => 'StageStatus',
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

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->gmtEndTime) {
            $res['GmtEndTime'] = $this->gmtEndTime;
        }

        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->stageInfo) {
            $res['StageInfo'] = $this->stageInfo;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        if (null !== $this->stageStatus) {
            $res['StageStatus'] = $this->stageStatus;
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

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['GmtEndTime'])) {
            $model->gmtEndTime = $map['GmtEndTime'];
        }

        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['StageInfo'])) {
            $model->stageInfo = $map['StageInfo'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        if (isset($map['StageStatus'])) {
            $model->stageStatus = $map['StageStatus'];
        }

        return $model;
    }
}
