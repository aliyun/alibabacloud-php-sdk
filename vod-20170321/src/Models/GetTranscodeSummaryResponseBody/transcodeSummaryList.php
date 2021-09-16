<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody\transcodeSummaryList\transcodeJobInfoSummaryList;
use AlibabaCloud\Tea\Model;

class transcodeSummaryList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var string
     */
    public $transcodeStatus;

    /**
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @var transcodeJobInfoSummaryList[]
     */
    public $transcodeJobInfoSummaryList;
    protected $_name = [
        'creationTime'                => 'CreationTime',
        'videoId'                     => 'VideoId',
        'completeTime'                => 'CompleteTime',
        'transcodeStatus'             => 'TranscodeStatus',
        'transcodeTemplateGroupId'    => 'TranscodeTemplateGroupId',
        'transcodeJobInfoSummaryList' => 'TranscodeJobInfoSummaryList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->transcodeStatus) {
            $res['TranscodeStatus'] = $this->transcodeStatus;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->transcodeJobInfoSummaryList) {
            $res['TranscodeJobInfoSummaryList'] = [];
            if (null !== $this->transcodeJobInfoSummaryList && \is_array($this->transcodeJobInfoSummaryList)) {
                $n = 0;
                foreach ($this->transcodeJobInfoSummaryList as $item) {
                    $res['TranscodeJobInfoSummaryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeSummaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['TranscodeStatus'])) {
            $model->transcodeStatus = $map['TranscodeStatus'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['TranscodeJobInfoSummaryList'])) {
            if (!empty($map['TranscodeJobInfoSummaryList'])) {
                $model->transcodeJobInfoSummaryList = [];
                $n                                  = 0;
                foreach ($map['TranscodeJobInfoSummaryList'] as $item) {
                    $model->transcodeJobInfoSummaryList[$n++] = null !== $item ? transcodeJobInfoSummaryList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
