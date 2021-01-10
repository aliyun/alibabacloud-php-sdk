<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes\episode;
use AlibabaCloud\Tea\Model;

class episodes extends Model
{
    /**
     * @var episode[]
     */
    public $episode;
    protected $_name = [
        'episode' => 'Episode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->episode) {
            $res['Episode'] = [];
            if (null !== $this->episode && \is_array($this->episode)) {
                $n = 0;
                foreach ($this->episode as $item) {
                    $res['Episode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return episodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Episode'])) {
            if (!empty($map['Episode'])) {
                $model->episode = [];
                $n              = 0;
                foreach ($map['Episode'] as $item) {
                    $model->episode[$n++] = null !== $item ? episode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
