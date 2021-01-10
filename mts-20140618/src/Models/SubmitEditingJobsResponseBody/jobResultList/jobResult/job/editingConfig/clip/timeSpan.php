<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\clip;

use AlibabaCloud\Tea\Model;

class timeSpan extends Model
{
    /**
     * @var string
     */
    public $seek;

    /**
     * @var string
     */
    public $duration;
    protected $_name = [
        'seek'     => 'Seek',
        'duration' => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->seek) {
            $res['Seek'] = $this->seek;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (isset($map['Seek'])) {
            $model->seek = $map['Seek'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
