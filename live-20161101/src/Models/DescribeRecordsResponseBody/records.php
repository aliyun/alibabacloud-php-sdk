<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $boardId;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var int
     */
    public $recordStartTime;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'endTime'         => 'EndTime',
        'startTime'       => 'StartTime',
        'boardId'         => 'BoardId',
        'state'           => 'State',
        'appId'           => 'AppId',
        'recordId'        => 'RecordId',
        'ossBucket'       => 'OssBucket',
        'recordStartTime' => 'RecordStartTime',
        'ossPath'         => 'OssPath',
        'ossEndpoint'     => 'OssEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->boardId) {
            $res['BoardId'] = $this->boardId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->recordStartTime) {
            $res['RecordStartTime'] = $this->recordStartTime;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['BoardId'])) {
            $model->boardId = $map['BoardId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['RecordStartTime'])) {
            $model->recordStartTime = $map['RecordStartTime'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}
