<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies\movie;

use AlibabaCloud\Tea\Model;

class trailerList extends Model
{
    /**
     * @var string[]
     */
    public $trailerList;
    protected $_name = [
        'trailerList' => 'TrailerList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trailerList) {
            $res['TrailerList'] = $this->trailerList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trailerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrailerList'])) {
            if (!empty($map['TrailerList'])) {
                $model->trailerList = $map['TrailerList'];
            }
        }

        return $model;
    }
}
