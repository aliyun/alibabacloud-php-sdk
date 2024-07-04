<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\trackList\track;

use AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\trackList\track\clips\clip;
use AlibabaCloud\Tea\Model;

class clips extends Model
{
    /**
     * @var clip[]
     */
    public $clip;
    protected $_name = [
        'clip' => 'Clip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clip) {
            $res['Clip'] = [];
            if (null !== $this->clip && \is_array($this->clip)) {
                $n = 0;
                foreach ($this->clip as $item) {
                    $res['Clip'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clip'])) {
            if (!empty($map['Clip'])) {
                $model->clip = [];
                $n           = 0;
                foreach ($map['Clip'] as $item) {
                    $model->clip[$n++] = null !== $item ? clip::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
