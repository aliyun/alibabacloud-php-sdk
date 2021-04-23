<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordResponseBody extends Model
{
    /**
     * @var int
     */
    public $boardId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $recordStartTime;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $recordId;
    protected $_name = [
        'boardId'         => 'BoardId',
        'endTime'         => 'EndTime',
        'requestId'       => 'RequestId',
        'appId'           => 'AppId',
        'recordStartTime' => 'RecordStartTime',
        'ossEndpoint'     => 'OssEndpoint',
        'state'           => 'State',
        'ossPath'         => 'OssPath',
        'startTime'       => 'StartTime',
        'ossBucket'       => 'OssBucket',
        'recordId'        => 'RecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boardId) {
            $res['BoardId'] = $this->boardId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->recordStartTime) {
            $res['RecordStartTime'] = $this->recordStartTime;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BoardId'])) {
            $model->boardId = $map['BoardId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RecordStartTime'])) {
            $model->recordStartTime = $map['RecordStartTime'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        return $model;
    }
}
