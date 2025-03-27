<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetTrainTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetTrainTaskResponseBody\voiceList\voiceMaterial;

class voiceList extends Model
{
    /**
     * @var string
     */
    public $aliyunSubId;

    /**
     * @var string
     */
    public $auditFailMessage;

    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resSpecType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $trainFailMessage;

    /**
     * @var string
     */
    public $trainStatus;

    /**
     * @var string
     */
    public $useScene;

    /**
     * @var voiceMaterial
     */
    public $voiceMaterial;
    protected $_name = [
        'aliyunSubId' => 'aliyunSubId',
        'auditFailMessage' => 'auditFailMessage',
        'auditStatus' => 'auditStatus',
        'createTime' => 'createTime',
        'gender' => 'gender',
        'name' => 'name',
        'resSpecType' => 'resSpecType',
        'taskId' => 'taskId',
        'taskType' => 'taskType',
        'trainFailMessage' => 'trainFailMessage',
        'trainStatus' => 'trainStatus',
        'useScene' => 'useScene',
        'voiceMaterial' => 'voiceMaterial',
    ];

    public function validate()
    {
        if (null !== $this->voiceMaterial) {
            $this->voiceMaterial->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunSubId) {
            $res['aliyunSubId'] = $this->aliyunSubId;
        }

        if (null !== $this->auditFailMessage) {
            $res['auditFailMessage'] = $this->auditFailMessage;
        }

        if (null !== $this->auditStatus) {
            $res['auditStatus'] = $this->auditStatus;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resSpecType) {
            $res['resSpecType'] = $this->resSpecType;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        if (null !== $this->trainFailMessage) {
            $res['trainFailMessage'] = $this->trainFailMessage;
        }

        if (null !== $this->trainStatus) {
            $res['trainStatus'] = $this->trainStatus;
        }

        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
        }

        if (null !== $this->voiceMaterial) {
            $res['voiceMaterial'] = null !== $this->voiceMaterial ? $this->voiceMaterial->toArray($noStream) : $this->voiceMaterial;
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
        if (isset($map['aliyunSubId'])) {
            $model->aliyunSubId = $map['aliyunSubId'];
        }

        if (isset($map['auditFailMessage'])) {
            $model->auditFailMessage = $map['auditFailMessage'];
        }

        if (isset($map['auditStatus'])) {
            $model->auditStatus = $map['auditStatus'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resSpecType'])) {
            $model->resSpecType = $map['resSpecType'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        if (isset($map['trainFailMessage'])) {
            $model->trainFailMessage = $map['trainFailMessage'];
        }

        if (isset($map['trainStatus'])) {
            $model->trainStatus = $map['trainStatus'];
        }

        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }

        if (isset($map['voiceMaterial'])) {
            $model->voiceMaterial = voiceMaterial::fromMap($map['voiceMaterial']);
        }

        return $model;
    }
}
