<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingDataPackagesResponseBody\dataPackages;
use AlibabaCloud\Tea\Model;

class ListRenderingDataPackagesResponseBody extends Model
{
    /**
     * @var dataPackages[]
     */
    public $dataPackages;

    /**
     * @description Id of the request
     *
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataPackages' => 'DataPackages',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPackages) {
            $res['DataPackages'] = [];
            if (null !== $this->dataPackages && \is_array($this->dataPackages)) {
                $n = 0;
                foreach ($this->dataPackages as $item) {
                    $res['DataPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListRenderingDataPackagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPackages'])) {
            if (!empty($map['DataPackages'])) {
                $model->dataPackages = [];
                $n                   = 0;
                foreach ($map['DataPackages'] as $item) {
                    $model->dataPackages[$n++] = null !== $item ? dataPackages::fromMap($item) : $item;
                }
            }
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
