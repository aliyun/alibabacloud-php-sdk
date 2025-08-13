<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeListModelResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $bucId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelScene;

    /**
     * @var string
     */
    public $modelStatus;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userLocalFileName;
    protected $_name = [
        'bucId' => 'bucId',
        'createTime' => 'createTime',
        'modelCode' => 'modelCode',
        'modelId' => 'modelId',
        'modelName' => 'modelName',
        'modelScene' => 'modelScene',
        'modelStatus' => 'modelStatus',
        'taskId' => 'taskId',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'userLocalFileName' => 'userLocalFileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucId) {
            $res['bucId'] = $this->bucId;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelScene) {
            $res['modelScene'] = $this->modelScene;
        }

        if (null !== $this->modelStatus) {
            $res['modelStatus'] = $this->modelStatus;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->userLocalFileName) {
            $res['userLocalFileName'] = $this->userLocalFileName;
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
        if (isset($map['bucId'])) {
            $model->bucId = $map['bucId'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelScene'])) {
            $model->modelScene = $map['modelScene'];
        }

        if (isset($map['modelStatus'])) {
            $model->modelStatus = $map['modelStatus'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['userLocalFileName'])) {
            $model->userLocalFileName = $map['userLocalFileName'];
        }

        return $model;
    }
}
