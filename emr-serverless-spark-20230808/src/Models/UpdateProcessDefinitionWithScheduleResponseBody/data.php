<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example foo_bar@spark.alert.invalid.com
     *
     * @var string
     */
    public $alertEmailAddress;

    /**
     * @example alicloud_ack_one_cluster
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 12***********
     *
     * @var string
     */
    public $code;

    /**
     * @example 2024-09-05T02:03:19Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 0 0 0 * * ?
     *
     * @var string
     */
    public $crontab;

    /**
     * @example 1
     *
     * @var string
     */
    public $description;

    /**
     * @example 1710432000000
     *
     * @var string
     */
    public $endTime;

    /**
     * @example SERIAL
     *
     * @var string
     */
    public $executionType;

    /**
     * @example 123223
     *
     * @var string
     */
    public $id;

    /**
     * @example ods_batch_workflow
     *
     * @var string
     */
    public $name;

    /**
     * @example w-********
     *
     * @var string
     */
    public $projectName;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $releaseState;

    /**
     * @example 0
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezoneId;

    /**
     * @example 2024-03-05T06:24:27Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 113*********
     *
     * @var string
     */
    public $userId;

    /**
     * @example w-********
     *
     * @var string
     */
    public $userName;

    /**
     * @example 1
     *
     * @var int
     */
    public $version;

    /**
     * @example dwerf*********
     *
     * @var string
     */
    public $versionHashCode;
    protected $_name = [
        'alertEmailAddress' => 'alertEmailAddress',
        'bizId'             => 'bizId',
        'code'              => 'code',
        'createTime'        => 'createTime',
        'crontab'           => 'crontab',
        'description'       => 'description',
        'endTime'           => 'endTime',
        'executionType'     => 'executionType',
        'id'                => 'id',
        'name'              => 'name',
        'projectName'       => 'projectName',
        'releaseState'      => 'releaseState',
        'startTime'         => 'startTime',
        'timezoneId'        => 'timezoneId',
        'updateTime'        => 'updateTime',
        'userId'            => 'userId',
        'userName'          => 'userName',
        'version'           => 'version',
        'versionHashCode'   => 'versionHashCode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
