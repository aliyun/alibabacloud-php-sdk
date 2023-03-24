<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody\connectors;
use AlibabaCloud\Tea\Model;

class ListConnectorsResponseBody extends Model
{
    /**
     * @var connectors[]
     */
    public $connectors;

    /**
     * @example 58D6B23E-E5DA-5418-8F61-51A3B5A30049
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'connectors' => 'Connectors',
        'requestId'  => 'RequestId',
        'totalNum'   => 'TotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectors) {
            $res['Connectors'] = [];
            if (null !== $this->connectors && \is_array($this->connectors)) {
                $n = 0;
                foreach ($this->connectors as $item) {
                    $res['Connectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConnectorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connectors'])) {
            if (!empty($map['Connectors'])) {
                $model->connectors = [];
                $n                 = 0;
                foreach ($map['Connectors'] as $item) {
                    $model->connectors[$n++] = null !== $item ? connectors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
