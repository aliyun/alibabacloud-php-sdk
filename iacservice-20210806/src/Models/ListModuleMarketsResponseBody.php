<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleMarketsResponseBody\moduleMarkets;
use AlibabaCloud\Tea\Model;

class ListModuleMarketsResponseBody extends Model
{
    /**
     * @var moduleMarkets[]
     */
    public $moduleMarkets;

    /**
     * @var int
     */
    public $pageNumber;

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
    public $totalCount;
    protected $_name = [
        'moduleMarkets' => 'moduleMarkets',
        'pageNumber'    => 'pageNumber',
        'pageSize'      => 'pageSize',
        'requestId'     => 'requestId',
        'totalCount'    => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleMarkets) {
            $res['moduleMarkets'] = [];
            if (null !== $this->moduleMarkets && \is_array($this->moduleMarkets)) {
                $n = 0;
                foreach ($this->moduleMarkets as $item) {
                    $res['moduleMarkets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListModuleMarketsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['moduleMarkets'])) {
            if (!empty($map['moduleMarkets'])) {
                $model->moduleMarkets = [];
                $n                    = 0;
                foreach ($map['moduleMarkets'] as $item) {
                    $model->moduleMarkets[$n++] = null !== $item ? moduleMarkets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
