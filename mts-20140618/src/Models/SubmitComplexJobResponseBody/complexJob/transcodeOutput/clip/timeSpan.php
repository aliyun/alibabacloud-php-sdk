<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\transcodeOutput\clip;

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
    public $seek;
    protected $_name = [
        'duration' => 'Duration',
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
        if (isset($map['Seek'])) {
            $model->seek = $map['Seek'];
        }

        return $model;
    }
}
