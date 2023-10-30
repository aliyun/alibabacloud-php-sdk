<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourcesResponseBody\datasources;
use AlibabaCloud\Tea\Model;

class ListDatasourcesResponseBody extends Model
{
    /**
     * @var datasources[]
     */
    public $datasources;

    /**
     * @example 44933189-493B-5C43-A5C6-11EEC2A43520
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'datasources' => 'Datasources',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasources) {
            $res['Datasources'] = [];
            if (null !== $this->datasources && \is_array($this->datasources)) {
                $n = 0;
                foreach ($this->datasources as $item) {
                    $res['Datasources'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDatasourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datasources'])) {
            if (!empty($map['Datasources'])) {
                $model->datasources = [];
                $n                  = 0;
                foreach ($map['Datasources'] as $item) {
                    $model->datasources[$n++] = null !== $item ? datasources::fromMap($item) : $item;
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
