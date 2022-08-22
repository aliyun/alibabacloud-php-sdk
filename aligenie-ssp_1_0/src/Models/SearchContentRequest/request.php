<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @var string
     */
    public $cate;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @var bool
     */
    public $queryAlbum;

    /**
     * @var string
     */
    public $subCate;
    protected $_name = [
        'cate'       => 'Cate',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'query'      => 'Query',
        'queryAlbum' => 'QueryAlbum',
        'subCate'    => 'SubCate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cate) {
            $res['Cate'] = $this->cate;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->queryAlbum) {
            $res['QueryAlbum'] = $this->queryAlbum;
        }
        if (null !== $this->subCate) {
            $res['SubCate'] = $this->subCate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cate'])) {
            $model->cate = $map['Cate'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['QueryAlbum'])) {
            $model->queryAlbum = $map['QueryAlbum'];
        }
        if (isset($map['SubCate'])) {
            $model->subCate = $map['SubCate'];
        }

        return $model;
    }
}
