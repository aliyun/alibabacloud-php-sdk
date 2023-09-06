<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\space\recentList;

use AlibabaCloud\Tea\Model;

class statisticalInfo extends Model
{
    /**
     * @var int
     */
    public $wordCount;
    protected $_name = [
        'wordCount' => 'WordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statisticalInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        return $model;
    }
}
