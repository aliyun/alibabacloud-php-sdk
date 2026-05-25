<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;

class CreateTlogTaskRequest extends Model
{
    /**
     * @var string
     */
    public $aliYunCurrentPk;

    /**
     * @var string
     */
    public $aliYunMainPk;

    /**
     * @var string
     */
    public $aliYunName;

    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var int
     */
    public $beginDate;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $collectionNums;

    /**
     * @var string
     */
    public $days;

    /**
     * @var string
     */
    public $deviceJson;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $notifySettingJson;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'aliYunCurrentPk' => 'AliYunCurrentPk',
        'aliYunMainPk' => 'AliYunMainPk',
        'aliYunName' => 'AliYunName',
        'appKey' => 'AppKey',
        'appVersion' => 'AppVersion',
        'beginDate' => 'BeginDate',
        'brand' => 'Brand',
        'city' => 'City',
        'clusterId' => 'ClusterId',
        'collectionNums' => 'CollectionNums',
        'days' => 'Days',
        'deviceJson' => 'DeviceJson',
        'endDate' => 'EndDate',
        'errorType' => 'ErrorType',
        'model' => 'Model',
        'notifySettingJson' => 'NotifySettingJson',
        'os' => 'Os',
        'osVersion' => 'OsVersion',
        'sourceType' => 'SourceType',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliYunCurrentPk) {
            $res['AliYunCurrentPk'] = $this->aliYunCurrentPk;
        }

        if (null !== $this->aliYunMainPk) {
            $res['AliYunMainPk'] = $this->aliYunMainPk;
        }

        if (null !== $this->aliYunName) {
            $res['AliYunName'] = $this->aliYunName;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }

        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->collectionNums) {
            $res['CollectionNums'] = $this->collectionNums;
        }

        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }

        if (null !== $this->deviceJson) {
            $res['DeviceJson'] = $this->deviceJson;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->notifySettingJson) {
            $res['NotifySettingJson'] = $this->notifySettingJson;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['AliYunCurrentPk'])) {
            $model->aliYunCurrentPk = $map['AliYunCurrentPk'];
        }

        if (isset($map['AliYunMainPk'])) {
            $model->aliYunMainPk = $map['AliYunMainPk'];
        }

        if (isset($map['AliYunName'])) {
            $model->aliYunName = $map['AliYunName'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }

        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CollectionNums'])) {
            $model->collectionNums = $map['CollectionNums'];
        }

        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        if (isset($map['DeviceJson'])) {
            $model->deviceJson = $map['DeviceJson'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['NotifySettingJson'])) {
            $model->notifySettingJson = $map['NotifySettingJson'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
