<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody\transcodeSummaryList\transcodeJobInfoSummaryList;
use AlibabaCloud\Tea\Model;

class transcodeSummaryList extends Model
{
    /**
     * @description The time when the transcoding task was complete. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-01-23T12:40:12Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the transcoding task was created. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-01-23T12:35:12Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The summaries of transcoding jobs.
     *
     * @var transcodeJobInfoSummaryList[]
     */
    public $transcodeJobInfoSummaryList;

    /**
     * @description The status of the transcoding task. Valid values:
     *
     *   **Processing**: Transcoding is in process.
     *   **Partial**: Some transcoding jobs were complete.
     *   **CompleteAllSucc**: All transcoding jobs were successful.
     *   **CompleteAllFail**: All transcoding jobs failed. If an exception occurs in the source file, no transcoding job is initiated and the transcoding task fails.
     *   **CompletePartialSucc**: All transcoding jobs were complete but only some were successful.
     *
     * @example Processing
     *
     * @var string
     */
    public $transcodeStatus;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example 44f9e406bbb*****736a9abe876ecc0
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description The ID of the audio or video file.
     *
     * @example e1db68cc586644b83e562bcd94****
     *
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
