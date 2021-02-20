<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgRiskyAssetsResponseBody\assets;
use AlibabaCloud\Tea\Model;

class ListOrgRiskyAssetsResponseBody extends Model
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
     * @var assets[]
     */
    public $assets;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'currentPage' => 'CurrentPage',
        'assets'      => 'Assets',
        'total'       => 'Total',
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
        if (null !== $this->assets) {
            $res['Assets'] = [];
            if (null !== $this->assets && \is_array($this->assets)) {
                $n = 0;
                foreach ($this->assets as $item) {
                    $res['Assets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrgRiskyAssetsResponseBody
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
        if (isset($map['Assets'])) {
            if (!empty($map['Assets'])) {
                $model->assets = [];
                $n             = 0;
                foreach ($map['Assets'] as $item) {
                    $model->assets[$n++] = null !== $item ? assets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
