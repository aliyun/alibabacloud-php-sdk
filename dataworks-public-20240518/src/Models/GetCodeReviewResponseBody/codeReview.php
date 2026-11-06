<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCodeReviewResponseBody;

use AlibabaCloud\Dara\Model;

class codeReview extends Model
{
    /**
     * @var string
     */
    public $command;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $finalReviewer;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $reviewTime;

    /**
     * @var string[]
     */
    public $reviewers;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'command' => 'Command',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'description' => 'Description',
        'finalReviewer' => 'FinalReviewer',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'objectId' => 'ObjectId',
        'objectName' => 'ObjectName',
        'objectType' => 'ObjectType',
        'projectId' => 'ProjectId',
        'regionId' => 'RegionId',
        'reviewTime' => 'ReviewTime',
        'reviewers' => 'Reviewers',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->reviewers)) {
            Model::validateArray($this->reviewers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->finalReviewer) {
            $res['FinalReviewer'] = $this->finalReviewer;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reviewTime) {
            $res['ReviewTime'] = $this->reviewTime;
        }

        if (null !== $this->reviewers) {
            if (\is_array($this->reviewers)) {
                $res['Reviewers'] = [];
                $n1 = 0;
                foreach ($this->reviewers as $item1) {
                    $res['Reviewers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FinalReviewer'])) {
            $model->finalReviewer = $map['FinalReviewer'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReviewTime'])) {
            $model->reviewTime = $map['ReviewTime'];
        }

        if (isset($map['Reviewers'])) {
            if (!empty($map['Reviewers'])) {
                $model->reviewers = [];
                $n1 = 0;
                foreach ($map['Reviewers'] as $item1) {
                    $model->reviewers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
