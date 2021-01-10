<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUpcomingMoviesResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUpcomingMoviesResponseBody\movies\movie;
use AlibabaCloud\Tea\Model;

class movies extends Model
{
    /**
     * @var movie[]
     */
    public $movie;
    protected $_name = [
        'movie' => 'Movie',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->movie) {
            $res['Movie'] = [];
            if (null !== $this->movie && \is_array($this->movie)) {
                $n = 0;
                foreach ($this->movie as $item) {
                    $res['Movie'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return movies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Movie'])) {
            if (!empty($map['Movie'])) {
                $model->movie = [];
                $n            = 0;
                foreach ($map['Movie'] as $item) {
                    $model->movie[$n++] = null !== $item ? movie::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
