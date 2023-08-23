<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsRequest;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsRequest\listHotelSceneReq\page;
use AlibabaCloud\Tea\Model;

class listHotelSceneReq extends Model
{
    /**
     * @example 客用品类
     *
     * @var string
     */
    public $category;

    /**
     * @example 棉签
     *
     * @var string
     */
    public $keywords;

    /**
     * @var page
     */
    public $page;

    /**
     * @example 已添加
     *
     * @var string
     */
    public $status;

    /**
     * @example GOODS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'category' => 'Category',
        'keywords' => 'Keywords',
        'page'     => 'Page',
        'status'   => 'Status',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listHotelSceneReq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
