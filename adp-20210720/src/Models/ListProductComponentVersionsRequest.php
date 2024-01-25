<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListProductComponentVersionsRequest extends Model
{
    /**
     * @example SAAS
     *
     * @var string
     */
    public $category;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $releaseName;

    /**
     * @example ASC
     *
     * @var string
     */
    public $sortDirect;

    /**
     * @example created_at
     *
     * @var string
     */
    public $sortKey;
    protected $_name = [
        'category'    => 'category',
        'pageNum'     => 'pageNum',
        'pageSize'    => 'pageSize',
        'releaseName' => 'releaseName',
        'sortDirect'  => 'sortDirect',
        'sortKey'     => 'sortKey',
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
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
        }
        if (null !== $this->sortDirect) {
            $res['sortDirect'] = $this->sortDirect;
        }
        if (null !== $this->sortKey) {
            $res['sortKey'] = $this->sortKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductComponentVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }
        if (isset($map['sortDirect'])) {
            $model->sortDirect = $map['sortDirect'];
        }
        if (isset($map['sortKey'])) {
            $model->sortKey = $map['sortKey'];
        }

        return $model;
    }
}
