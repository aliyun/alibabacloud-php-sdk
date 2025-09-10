<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityResponseBody\data;

use AlibabaCloud\Dara\Model;

class categories extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'score' => 'Score',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
