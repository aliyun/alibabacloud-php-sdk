<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullToPushResponseBody;

use AlibabaCloud\Dara\Model;

class taskInfo extends Model
{
    /**
     * @var string
     */
    public $callbackURL;

    /**
     * @var string
     */
    public $dstUrl;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $fileIndex;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $repeatNumber;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $sourceProtocol;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string[]
     */
    public $sourceUrls;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'callbackURL' => 'CallbackURL',
        'dstUrl' => 'DstUrl',
        'endTime' => 'EndTime',
        'fileIndex' => 'FileIndex',
        'offset' => 'Offset',
        'repeatNumber' => 'RepeatNumber',
        'retryCount' => 'RetryCount',
        'retryInterval' => 'RetryInterval',
        'sourceProtocol' => 'SourceProtocol',
        'sourceType' => 'SourceType',
        'sourceUrls' => 'SourceUrls',
        'startTime' => 'StartTime',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        if (\is_array($this->sourceUrls)) {
            Model::validateArray($this->sourceUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }

        if (null !== $this->dstUrl) {
            $res['DstUrl'] = $this->dstUrl;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->fileIndex) {
            $res['FileIndex'] = $this->fileIndex;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->repeatNumber) {
            $res['RepeatNumber'] = $this->repeatNumber;
        }

        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }

        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }

        if (null !== $this->sourceProtocol) {
            $res['SourceProtocol'] = $this->sourceProtocol;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->sourceUrls) {
            if (\is_array($this->sourceUrls)) {
                $res['SourceUrls'] = [];
                $n1 = 0;
                foreach ($this->sourceUrls as $item1) {
                    $res['SourceUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
        }

        if (isset($map['DstUrl'])) {
            $model->dstUrl = $map['DstUrl'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FileIndex'])) {
            $model->fileIndex = $map['FileIndex'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['RepeatNumber'])) {
            $model->repeatNumber = $map['RepeatNumber'];
        }

        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }

        if (isset($map['SourceProtocol'])) {
            $model->sourceProtocol = $map['SourceProtocol'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SourceUrls'])) {
            if (!empty($map['SourceUrls'])) {
                $model->sourceUrls = [];
                $n1 = 0;
                foreach ($map['SourceUrls'] as $item1) {
                    $model->sourceUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
