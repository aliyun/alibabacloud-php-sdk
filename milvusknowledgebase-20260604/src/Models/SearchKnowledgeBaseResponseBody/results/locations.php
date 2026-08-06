<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody\results;

use AlibabaCloud\Dara\Model;

class locations extends Model
{
    /**
     * @var int
     */
    public $bottom;

    /**
     * @var int
     */
    public $left;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $right;

    /**
     * @var int
     */
    public $top;
    protected $_name = [
        'bottom' => 'bottom',
        'left' => 'left',
        'pageNumber' => 'pageNumber',
        'right' => 'right',
        'top' => 'top',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bottom) {
            $res['bottom'] = $this->bottom;
        }

        if (null !== $this->left) {
            $res['left'] = $this->left;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->right) {
            $res['right'] = $this->right;
        }

        if (null !== $this->top) {
            $res['top'] = $this->top;
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
        if (isset($map['bottom'])) {
            $model->bottom = $map['bottom'];
        }

        if (isset($map['left'])) {
            $model->left = $map['left'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['right'])) {
            $model->right = $map['right'];
        }

        if (isset($map['top'])) {
            $model->top = $map['top'];
        }

        return $model;
    }
}
