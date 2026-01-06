<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetDingtalkMeetingInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $conferenceId;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorNick;

    /**
     * @var string
     */
    public $creatorWorkNo;

    /**
     * @var string
     */
    public $deptName;

    /**
     * @var bool
     */
    public $enableQualityMonitor;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $freeType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $timeLength;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'clusterName' => 'clusterName',
        'conferenceId' => 'conferenceId',
        'creatorId' => 'creatorId',
        'creatorNick' => 'creatorNick',
        'creatorWorkNo' => 'creatorWorkNo',
        'deptName' => 'deptName',
        'enableQualityMonitor' => 'enableQualityMonitor',
        'endTime' => 'endTime',
        'freeType' => 'freeType',
        'requestId' => 'requestId',
        'scene' => 'scene',
        'startTime' => 'startTime',
        'timeLength' => 'timeLength',
        'title' => 'title',
        'userCount' => 'userCount',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorNick) {
            $res['creatorNick'] = $this->creatorNick;
        }

        if (null !== $this->creatorWorkNo) {
            $res['creatorWorkNo'] = $this->creatorWorkNo;
        }

        if (null !== $this->deptName) {
            $res['deptName'] = $this->deptName;
        }

        if (null !== $this->enableQualityMonitor) {
            $res['enableQualityMonitor'] = $this->enableQualityMonitor;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->freeType) {
            $res['freeType'] = $this->freeType;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->timeLength) {
            $res['timeLength'] = $this->timeLength;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->userCount) {
            $res['userCount'] = $this->userCount;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }

        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['creatorNick'])) {
            $model->creatorNick = $map['creatorNick'];
        }

        if (isset($map['creatorWorkNo'])) {
            $model->creatorWorkNo = $map['creatorWorkNo'];
        }

        if (isset($map['deptName'])) {
            $model->deptName = $map['deptName'];
        }

        if (isset($map['enableQualityMonitor'])) {
            $model->enableQualityMonitor = $map['enableQualityMonitor'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['freeType'])) {
            $model->freeType = $map['freeType'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['timeLength'])) {
            $model->timeLength = $map['timeLength'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['userCount'])) {
            $model->userCount = $map['userCount'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
