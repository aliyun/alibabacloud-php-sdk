<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssResultItemsResponseBody;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssResultItemsResponseBody\scanResultList\frameResults;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssResultItemsResponseBody\scanResultList\voiceSegmentAntispamResults;
use AlibabaCloud\Tea\Model;

class scanResultList extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var frameResults[]
     */
    public $frameResults;

    /**
     * @var int
     */
    public $handleStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $newUrl;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var int
     */
    public $resourceStatus;

    /**
     * @var string
     */
    public $scanFinishedTime;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var voiceSegmentAntispamResults[]
     */
    public $voiceSegmentAntispamResults;
    protected $_name = [
        'bucket'                      => 'Bucket',
        'content'                     => 'Content',
        'createTime'                  => 'CreateTime',
        'dataId'                      => 'DataId',
        'frameResults'                => 'FrameResults',
        'handleStatus'                => 'HandleStatus',
        'id'                          => 'Id',
        'newUrl'                      => 'NewUrl',
        'object'                      => 'Object',
        'requestTime'                 => 'RequestTime',
        'resourceStatus'              => 'ResourceStatus',
        'scanFinishedTime'            => 'ScanFinishedTime',
        'score'                       => 'Score',
        'suggestion'                  => 'Suggestion',
        'taskId'                      => 'TaskId',
        'thumbnail'                   => 'Thumbnail',
        'voiceSegmentAntispamResults' => 'VoiceSegmentAntispamResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->frameResults) {
            $res['FrameResults'] = [];
            if (null !== $this->frameResults && \is_array($this->frameResults)) {
                $n = 0;
                foreach ($this->frameResults as $item) {
                    $res['FrameResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->handleStatus) {
            $res['HandleStatus'] = $this->handleStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->newUrl) {
            $res['NewUrl'] = $this->newUrl;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->scanFinishedTime) {
            $res['ScanFinishedTime'] = $this->scanFinishedTime;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->voiceSegmentAntispamResults) {
            $res['VoiceSegmentAntispamResults'] = [];
            if (null !== $this->voiceSegmentAntispamResults && \is_array($this->voiceSegmentAntispamResults)) {
                $n = 0;
                foreach ($this->voiceSegmentAntispamResults as $item) {
                    $res['VoiceSegmentAntispamResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scanResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['FrameResults'])) {
            if (!empty($map['FrameResults'])) {
                $model->frameResults = [];
                $n                   = 0;
                foreach ($map['FrameResults'] as $item) {
                    $model->frameResults[$n++] = null !== $item ? frameResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HandleStatus'])) {
            $model->handleStatus = $map['HandleStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NewUrl'])) {
            $model->newUrl = $map['NewUrl'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['ScanFinishedTime'])) {
            $model->scanFinishedTime = $map['ScanFinishedTime'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }
        if (isset($map['VoiceSegmentAntispamResults'])) {
            if (!empty($map['VoiceSegmentAntispamResults'])) {
                $model->voiceSegmentAntispamResults = [];
                $n                                  = 0;
                foreach ($map['VoiceSegmentAntispamResults'] as $item) {
                    $model->voiceSegmentAntispamResults[$n++] = null !== $item ? voiceSegmentAntispamResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
