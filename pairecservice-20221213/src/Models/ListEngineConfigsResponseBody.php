<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListEngineConfigsResponseBody\engineConfigs;

class ListEngineConfigsResponseBody extends Model
{
    /**
     * @var engineConfigs[]
     */
    public $engineConfigs;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->engineConfigs)) {
            Model::validateArray($this->engineConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineConfigs) {
            if (\is_array($this->engineConfigs)) {
                $res['EngineConfigs'] = [];
                $n1                   = 0;
                foreach ($this->engineConfigs as $item1) {
                    $res['EngineConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineConfigs'])) {
            if (!empty($map['EngineConfigs'])) {
                $model->engineConfigs = [];
                $n1                   = 0;
                foreach ($map['EngineConfigs'] as $item1) {
                    $model->engineConfigs[$n1++] = engineConfigs::fromMap($item1);
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
