<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineResponseBody\pipeline\source;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineResponseBody\pipeline\source\config\timeRange;

class config extends Model
{
    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $startFrom;

    /**
     * @var timeRange
     */
    public $timeRange;
    protected $_name = [
        'runMode' => 'runMode',
        'startFrom' => 'startFrom',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
        if (null !== $this->timeRange) {
            $this->timeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->runMode) {
            $res['runMode'] = $this->runMode;
        }

        if (null !== $this->startFrom) {
            $res['startFrom'] = $this->startFrom;
        }

        if (null !== $this->timeRange) {
            $res['timeRange'] = null !== $this->timeRange ? $this->timeRange->toArray($noStream) : $this->timeRange;
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
        if (isset($map['runMode'])) {
            $model->runMode = $map['runMode'];
        }

        if (isset($map['startFrom'])) {
            $model->startFrom = $map['startFrom'];
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = timeRange::fromMap($map['timeRange']);
        }

        return $model;
    }
}
