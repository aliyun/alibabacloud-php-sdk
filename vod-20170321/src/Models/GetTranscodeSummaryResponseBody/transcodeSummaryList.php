<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody\transcodeSummaryList\transcodeJobInfoSummaryList;

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
        'completeTime' => 'CompleteTime',
        'creationTime' => 'CreationTime',
        'transcodeJobInfoSummaryList' => 'TranscodeJobInfoSummaryList',
        'transcodeStatus' => 'TranscodeStatus',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        if (\is_array($this->transcodeJobInfoSummaryList)) {
            Model::validateArray($this->transcodeJobInfoSummaryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->transcodeJobInfoSummaryList) {
            if (\is_array($this->transcodeJobInfoSummaryList)) {
                $res['TranscodeJobInfoSummaryList'] = [];
                $n1 = 0;
                foreach ($this->transcodeJobInfoSummaryList as $item1) {
                    $res['TranscodeJobInfoSummaryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['TranscodeJobInfoSummaryList'] as $item1) {
                    $model->transcodeJobInfoSummaryList[$n1++] = transcodeJobInfoSummaryList::fromMap($item1);
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
