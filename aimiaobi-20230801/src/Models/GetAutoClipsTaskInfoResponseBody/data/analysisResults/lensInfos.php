<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\analysisResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\analysisResults\lensInfos\endTime;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\analysisResults\lensInfos\startTime;

class lensInfos extends Model
{
    /**
     * @var string
     */
    public $analysisContent;

    /**
     * @var endTime
     */
    public $endTime;

    /**
     * @var startTime
     */
    public $startTime;
    protected $_name = [
        'analysisContent' => 'AnalysisContent',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->endTime) {
            $this->endTime->validate();
        }
        if (null !== $this->startTime) {
            $this->startTime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisContent) {
            $res['AnalysisContent'] = $this->analysisContent;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = null !== $this->endTime ? $this->endTime->toArray($noStream) : $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = null !== $this->startTime ? $this->startTime->toArray($noStream) : $this->startTime;
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
        if (isset($map['AnalysisContent'])) {
            $model->analysisContent = $map['AnalysisContent'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = endTime::fromMap($map['EndTime']);
        }

        if (isset($map['StartTime'])) {
            $model->startTime = startTime::fromMap($map['StartTime']);
        }

        return $model;
    }
}
