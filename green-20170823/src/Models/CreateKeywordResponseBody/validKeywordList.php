<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\CreateKeywordResponseBody;

use AlibabaCloud\Tea\Model;

class validKeywordList extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $keyword;
    protected $_name = [
        'id'      => 'id',
        'keyword' => 'keyword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return validKeywordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        return $model;
    }
}
