<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alertEmailAddress;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $crontab;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $executionType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $releaseState;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $timezoneId;

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
    public $userName;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $versionHashCode;
    protected $_name = [
        'alertEmailAddress' => 'alertEmailAddress',
        'bizId' => 'bizId',
        'code' => 'code',
        'createTime' => 'createTime',
        'crontab' => 'crontab',
        'description' => 'description',
        'endTime' => 'endTime',
        'executionType' => 'executionType',
        'id' => 'id',
        'name' => 'name',
        'projectName' => 'projectName',
        'releaseState' => 'releaseState',
        'startTime' => 'startTime',
        'timezoneId' => 'timezoneId',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'userName' => 'userName',
        'version' => 'version',
        'versionHashCode' => 'versionHashCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertEmailAddress) {
            $res['alertEmailAddress'] = $this->alertEmailAddress;
        }

        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->crontab) {
            $res['crontab'] = $this->crontab;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->executionType) {
            $res['executionType'] = $this->executionType;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->releaseState) {
            $res['releaseState'] = $this->releaseState;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->timezoneId) {
            $res['timezoneId'] = $this->timezoneId;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->versionHashCode) {
            $res['versionHashCode'] = $this->versionHashCode;
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
        if (isset($map['alertEmailAddress'])) {
            $model->alertEmailAddress = $map['alertEmailAddress'];
        }

        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['crontab'])) {
            $model->crontab = $map['crontab'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['executionType'])) {
            $model->executionType = $map['executionType'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['releaseState'])) {
            $model->releaseState = $map['releaseState'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['timezoneId'])) {
            $model->timezoneId = $map['timezoneId'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['versionHashCode'])) {
            $model->versionHashCode = $map['versionHashCode'];
        }

        return $model;
    }
}
