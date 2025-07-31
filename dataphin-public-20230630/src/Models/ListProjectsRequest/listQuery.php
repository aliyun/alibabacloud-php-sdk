<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @example BASIC
     *
     * @var string
     */
    public $mode;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $tagList;
    protected $_name = [
        'env' => 'Env',
        'keyword' => 'Keyword',
        'mode' => 'Mode',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'tagList' => 'TagList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = $map['TagList'];
            }
        }

        return $model;
    }
}
