<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorsResponseBody\connectors;
use AlibabaCloud\Tea\Model;

class ListConnectorsResponseBody extends Model
{
    /**
     * @var connectors[]
     */
    public $connectors;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectors' => 'Connectors',
        'requestId'  => 'RequestId',
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

        return $model;
    }
}
