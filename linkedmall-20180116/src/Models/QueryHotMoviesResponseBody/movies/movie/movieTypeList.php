<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies\movie;

use AlibabaCloud\Tea\Model;

class movieTypeList extends Model
{
    /**
     * @var string[]
     */
    public $movieTypeList;
    protected $_name = [
        'movieTypeList' => 'MovieTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->movieTypeList) {
            $res['MovieTypeList'] = $this->movieTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return movieTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MovieTypeList'])) {
            if (!empty($map['MovieTypeList'])) {
                $model->movieTypeList = $map['MovieTypeList'];
            }
        }

        return $model;
    }
}
