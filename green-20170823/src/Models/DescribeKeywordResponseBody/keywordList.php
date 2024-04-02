<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeKeywordResponseBody;

use AlibabaCloud\Tea\Model;

class keywordList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $hitCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $keyword;
    protected $_name = [
        'createTime' => 'CreateTime',
        'hitCount'   => 'HitCount',
        'id'         => 'Id',
        'keyword'    => 'Keyword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hitCount) {
            $res['HitCount'] = $this->hitCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keywordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HitCount'])) {
            $model->hitCount = $map['HitCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        return $model;
    }
}
