<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;

class GetJMeterSamplingLogsRequest extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $maxRT;

    /**
     * @var int
     */
    public $minRT;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $responseCode;

    /**
     * @var int
     */
    public $samplerId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $thread;
    protected $_name = [
        'agentId' => 'AgentId',
        'beginTime' => 'BeginTime',
        'endTime' => 'EndTime',
        'keyword' => 'Keyword',
        'maxRT' => 'MaxRT',
        'minRT' => 'MinRT',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'reportId' => 'ReportId',
        'responseCode' => 'ResponseCode',
        'samplerId' => 'SamplerId',
        'success' => 'Success',
        'thread' => 'Thread',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->maxRT) {
            $res['MaxRT'] = $this->maxRT;
        }

        if (null !== $this->minRT) {
            $res['MinRT'] = $this->minRT;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }

        if (null !== $this->samplerId) {
            $res['SamplerId'] = $this->samplerId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['MaxRT'])) {
            $model->maxRT = $map['MaxRT'];
        }

        if (isset($map['MinRT'])) {
            $model->minRT = $map['MinRT'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }

        if (isset($map['SamplerId'])) {
            $model->samplerId = $map['SamplerId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }

        return $model;
    }
}
