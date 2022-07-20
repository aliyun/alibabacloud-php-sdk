<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest\templateConfig\overwriteParams;

use AlibabaCloud\Tea\Model;

class timeSpan extends Model
{
    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $end;

    /**
     * @var string
     */
    public $seek;
    protected $_name = [
        'duration' => 'Duration',
        'end'      => 'End',
        'seek'     => 'Seek',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->seek) {
            $res['Seek'] = $this->seek;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeSpan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Seek'])) {
            $model->seek = $map['Seek'];
        }

        return $model;
    }
}
