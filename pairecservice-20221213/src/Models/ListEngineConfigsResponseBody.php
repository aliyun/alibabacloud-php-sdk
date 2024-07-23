<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListEngineConfigsResponseBody\engineConfigs;
use AlibabaCloud\Tea\Model;

class ListEngineConfigsResponseBody extends Model
{
    /**
     * @var engineConfigs[]
     */
    public $engineConfigs;

    /**
     * @example 74D958EF-3598-56FA-8296-FF1575CE43DF
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
        'engineConfigs' => 'EngineConfigs',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineConfigs) {
            $res['EngineConfigs'] = [];
            if (null !== $this->engineConfigs && \is_array($this->engineConfigs)) {
                $n = 0;
                foreach ($this->engineConfigs as $item) {
                    $res['EngineConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListEngineConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineConfigs'])) {
            if (!empty($map['EngineConfigs'])) {
                $model->engineConfigs = [];
                $n                    = 0;
                foreach ($map['EngineConfigs'] as $item) {
                    $model->engineConfigs[$n++] = null !== $item ? engineConfigs::fromMap($item) : $item;
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
