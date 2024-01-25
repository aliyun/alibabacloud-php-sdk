<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListComponentsRequest extends Model
{
    /**
     * @example SAAS
     *
     * @var string
     */
    public $category;

    /**
     * @example name
     *
     * @var string
     */
    public $fuzzy;

    /**
     * @example component-name
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example false
     *
     * @var bool
     */
    public $public;
    protected $_name = [
        'category' => 'category',
        'fuzzy'    => 'fuzzy',
        'name'     => 'name',
        'pageNum'  => 'pageNum',
        'pageSize' => 'pageSize',
        'public'   => 'public',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->fuzzy) {
            $res['fuzzy'] = $this->fuzzy;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->public) {
            $res['public'] = $this->public;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListComponentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['fuzzy'])) {
            $model->fuzzy = $map['fuzzy'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['public'])) {
            $model->public = $map['public'];
        }

        return $model;
    }
}
