<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListResponseBody\jobList\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListResponseBody\jobList\job\videoSummaryResult\outputFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListResponseBody\jobList\job\videoSummaryResult\videoSummaryList;
use AlibabaCloud\Tea\Model;

class videoSummaryResult extends Model
{
    /**
     * @var outputFile
     */
    public $outputFile;

    /**
     * @var videoSummaryList
     */
    public $videoSummaryList;
    protected $_name = [
        'outputFile'       => 'OutputFile',
        'videoSummaryList' => 'VideoSummaryList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->videoSummaryList) {
            $res['VideoSummaryList'] = null !== $this->videoSummaryList ? $this->videoSummaryList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoSummaryResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        if (isset($map['VideoSummaryList'])) {
            $model->videoSummaryList = videoSummaryList::fromMap($map['VideoSummaryList']);
        }

        return $model;
    }
}
