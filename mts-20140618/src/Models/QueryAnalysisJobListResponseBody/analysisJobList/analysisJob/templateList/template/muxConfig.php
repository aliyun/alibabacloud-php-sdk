<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\templateList\template;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\templateList\template\muxConfig\gif;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\templateList\template\muxConfig\segment;

class muxConfig extends Model
{
    /**
     * @var gif
     */
    public $gif;

    /**
     * @var segment
     */
    public $segment;
    protected $_name = [
        'gif' => 'Gif',
        'segment' => 'Segment',
    ];

    public function validate()
    {
        if (null !== $this->gif) {
            $this->gif->validate();
        }
        if (null !== $this->segment) {
            $this->segment->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gif) {
            $res['Gif'] = null !== $this->gif ? $this->gif->toArray($noStream) : $this->gif;
        }

        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toArray($noStream) : $this->segment;
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
        if (isset($map['Gif'])) {
            $model->gif = gif::fromMap($map['Gif']);
        }

        if (isset($map['Segment'])) {
            $model->segment = segment::fromMap($map['Segment']);
        }

        return $model;
    }
}
