<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEcGrantRelationResponseBody\ecGrantRelations;
use AlibabaCloud\Tea\Model;

class DescribeEcGrantRelationResponseBody extends Model
{
    /**
     * @description The number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The ID of the Alibaba Cloud account to which the VBR belongs.
     *
     * @var ecGrantRelations[]
     */
    public $ecGrantRelations;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query results.
     *
     * @example E6E90F6B-2B41-5AAF-ABEB-236ADBAAD91D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'            => 'Count',
        'ecGrantRelations' => 'EcGrantRelations',
        'page'             => 'Page',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ecGrantRelations) {
            $res['EcGrantRelations'] = [];
            if (null !== $this->ecGrantRelations && \is_array($this->ecGrantRelations)) {
                $n = 0;
                foreach ($this->ecGrantRelations as $item) {
                    $res['EcGrantRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEcGrantRelationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['EcGrantRelations'])) {
            if (!empty($map['EcGrantRelations'])) {
                $model->ecGrantRelations = [];
                $n                       = 0;
                foreach ($map['EcGrantRelations'] as $item) {
                    $model->ecGrantRelations[$n++] = null !== $item ? ecGrantRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
