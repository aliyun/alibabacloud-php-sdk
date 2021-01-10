<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddWaterMarkTemplateResponseBody\waterMarkTemplate;

use AlibabaCloud\Tea\Model;

class timeline extends Model
{
    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $duration;
    protected $_name = [
        'start'    => 'Start',
        'duration' => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
