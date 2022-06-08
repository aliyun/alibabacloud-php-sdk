<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListTemplatesRequest extends Model
{
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
     * @description 当前页码。默认值为1。
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 分页大小，每页显示条数。默认值为10，最大值为100。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 排序参数，默认根据创建时间倒序
     *
     * @var string
     */
    public $sortType;

    /**
     * @description 模板状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 模板类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createSource' => 'CreateSource',
        'keyword'      => 'Keyword',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'sortType'     => 'SortType',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
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
     * @return ListTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
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
