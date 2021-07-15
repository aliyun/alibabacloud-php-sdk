<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListTemplatesRequest extends Model
{
    /**
     * @description 模板类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 模板状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 创建来源
     *
     * @var string
     */
    public $createSource;

    /**
     * @description 搜索关键词，可以根据模板id和title搜索
     *
     * @var string
     */
    public $keyword;

    /**
     * @description 排序参数，默认根据创建时间倒序
     *
     * @var string
     */
    public $sortType;
    protected $_name = [
        'type'         => 'Type',
        'status'       => 'Status',
        'createSource' => 'CreateSource',
        'keyword'      => 'Keyword',
        'sortType'     => 'SortType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        return $model;
    }
}
