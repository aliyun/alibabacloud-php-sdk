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
    public $completeTime;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var transcodeJobInfoSummaryList[]
     */
    public $transcodeJobInfoSummaryList;

    /**
     * @var string
     */
    public $transcodeStatus;

    /**
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'completeTime'                => 'CompleteTime',
        'creationTime'                => 'CreationTime',
        'transcodeJobInfoSummaryList' => 'TranscodeJobInfoSummaryList',
        'transcodeStatus'             => 'TranscodeStatus',
        'transcodeTemplateGroupId'    => 'TranscodeTemplateGroupId',
        'videoId'                     => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (null !== $this->transcodeStatus) {
            $res['TranscodeStatus'] = $this->transcodeStatus;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['TranscodeStatus'])) {
            $model->transcodeStatus = $map['TranscodeStatus'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
