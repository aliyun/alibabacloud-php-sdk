<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\templateList\template\muxConfig;

use AlibabaCloud\Dara\Model;

class gif extends Model
{
    /**
     * @var string
     */
    public $finalDelay;

    /**
     * @var string
     */
    public $loop;
    protected $_name = [
        'finalDelay' => 'FinalDelay',
        'loop' => 'Loop',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finalDelay) {
            $res['FinalDelay'] = $this->finalDelay;
        }

        if (null !== $this->loop) {
            $res['Loop'] = $this->loop;
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
        if (isset($map['FinalDelay'])) {
            $model->finalDelay = $map['FinalDelay'];
        }

        if (isset($map['Loop'])) {
            $model->loop = $map['Loop'];
        }

        return $model;
    }
}
