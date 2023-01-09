<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class GetJMeterSamplingLogsRequest extends Model
{
    /**
     * @example 14238000
     *
     * @var int
     */
    public $agentId;

    /**
     * @example 1637157073000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 1637157076000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxRT;

    /**
     * @example 0
     *
     * @var int
     */
    public $minRT;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 7R4RE352
     *
     * @var string
     */
    public $reportId;

    /**
     * @example 200
     *
     * @var string
     */
    public $responseCode;

    /**
     * @example 0
     *
     * @var int
     */
    public $samplerId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example main
     *
     * @var string
     */
    public $thread;
    protected $_name = [
        'agentId'      => 'AgentId',
        'beginTime'    => 'BeginTime',
        'endTime'      => 'EndTime',
        'keyword'      => 'Keyword',
        'maxRT'        => 'MaxRT',
        'minRT'        => 'MinRT',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'reportId'     => 'ReportId',
        'responseCode' => 'ResponseCode',
        'samplerId'    => 'SamplerId',
        'success'      => 'Success',
        'thread'       => 'Thread',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetJMeterSamplingLogsRequest
     */
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
