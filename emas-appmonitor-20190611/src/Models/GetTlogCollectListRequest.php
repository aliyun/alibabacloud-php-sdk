<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;

class GetTlogCollectListRequest extends Model
{
    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $author;

    /**
     * @var int
     */
    public $beginDate;

    /**
     * @var string
     */
    public $city;

    /**
     * @var int
     */
    public $createBeginDate;

    /**
     * @var int
     */
    public $createEndDate;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $positiveComment;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateBeginDate;

    /**
     * @var int
     */
    public $updateEndDate;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @var string
     */
    public $utdid;
    protected $_name = [
        'appKey' => 'AppKey',
        'appVersion' => 'AppVersion',
        'author' => 'Author',
        'beginDate' => 'BeginDate',
        'city' => 'City',
        'createBeginDate' => 'CreateBeginDate',
        'createEndDate' => 'CreateEndDate',
        'deviceId' => 'DeviceId',
        'endDate' => 'EndDate',
        'keyword' => 'Keyword',
        'model' => 'Model',
        'os' => 'Os',
        'osVersion' => 'OsVersion',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
        'positiveComment' => 'PositiveComment',
        'sourceType' => 'SourceType',
        'status' => 'Status',
        'updateBeginDate' => 'UpdateBeginDate',
        'updateEndDate' => 'UpdateEndDate',
        'userNick' => 'UserNick',
        'utdid' => 'Utdid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }

        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->createBeginDate) {
            $res['CreateBeginDate'] = $this->createBeginDate;
        }

        if (null !== $this->createEndDate) {
            $res['CreateEndDate'] = $this->createEndDate;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->positiveComment) {
            $res['PositiveComment'] = $this->positiveComment;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateBeginDate) {
            $res['UpdateBeginDate'] = $this->updateBeginDate;
        }

        if (null !== $this->updateEndDate) {
            $res['UpdateEndDate'] = $this->updateEndDate;
        }

        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        if (null !== $this->utdid) {
            $res['Utdid'] = $this->utdid;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }

        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CreateBeginDate'])) {
            $model->createBeginDate = $map['CreateBeginDate'];
        }

        if (isset($map['CreateEndDate'])) {
            $model->createEndDate = $map['CreateEndDate'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PositiveComment'])) {
            $model->positiveComment = $map['PositiveComment'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateBeginDate'])) {
            $model->updateBeginDate = $map['UpdateBeginDate'];
        }

        if (isset($map['UpdateEndDate'])) {
            $model->updateEndDate = $map['UpdateEndDate'];
        }

        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        if (isset($map['Utdid'])) {
            $model->utdid = $map['Utdid'];
        }

        return $model;
    }
}
