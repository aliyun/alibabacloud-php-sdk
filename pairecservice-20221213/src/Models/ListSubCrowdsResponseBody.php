<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSubCrowdsResponseBody\subCrowds;
use AlibabaCloud\Tea\Model;

class ListSubCrowdsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example C5AEB79E-FAA4-5DCE-8CD7-1CAF549ECC3E
     *
     * @var string
     */
    public $requestId;

    /**
     * @var subCrowds[]
     */
    public $subCrowds;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'subCrowds'  => 'SubCrowds',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subCrowds) {
            $res['SubCrowds'] = [];
            if (null !== $this->subCrowds && \is_array($this->subCrowds)) {
                $n = 0;
                foreach ($this->subCrowds as $item) {
                    $res['SubCrowds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubCrowdsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubCrowds'])) {
            if (!empty($map['SubCrowds'])) {
                $model->subCrowds = [];
                $n                = 0;
                foreach ($map['SubCrowds'] as $item) {
                    $model->subCrowds[$n++] = null !== $item ? subCrowds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
