<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline;

use AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\trackList\track;
use AlibabaCloud\Tea\Model;

class trackList extends Model
{
    /**
     * @var track[]
     */
    public $track;
    protected $_name = [
        'track' => 'Track',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->track) {
            $res['Track'] = [];
            if (null !== $this->track && \is_array($this->track)) {
                $n = 0;
                foreach ($this->track as $item) {
                    $res['Track'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trackList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Track'])) {
            if (!empty($map['Track'])) {
                $model->track = [];
                $n            = 0;
                foreach ($map['Track'] as $item) {
                    $model->track[$n++] = null !== $item ? track::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
