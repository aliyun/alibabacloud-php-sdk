<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgVulFacetsResponseBody\vuls;
use AlibabaCloud\Tea\Model;

class ListOrgVulFacetsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $total;

    /**
     * @var vuls[]
     */
    public $vuls;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'currentPage' => 'CurrentPage',
        'total'       => 'Total',
        'vuls'        => 'Vuls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->vuls) {
            $res['Vuls'] = [];
            if (null !== $this->vuls && \is_array($this->vuls)) {
                $n = 0;
                foreach ($this->vuls as $item) {
                    $res['Vuls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrgVulFacetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Vuls'])) {
            if (!empty($map['Vuls'])) {
                $model->vuls = [];
                $n           = 0;
                foreach ($map['Vuls'] as $item) {
                    $model->vuls[$n++] = null !== $item ? vuls::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
