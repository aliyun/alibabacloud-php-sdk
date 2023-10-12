<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInstancesResponseBody\logicResource;
use AlibabaCloud\Tea\Model;

class ListResourceInstancesResponseBody extends Model
{
    /**
     * @var logicResource[]
     */
    public $logicResource;

    /**
     * @example 请求id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logicResource' => 'LogicResource',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicResource) {
            $res['LogicResource'] = [];
            if (null !== $this->logicResource && \is_array($this->logicResource)) {
                $n = 0;
                foreach ($this->logicResource as $item) {
                    $res['LogicResource'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListResourceInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicResource'])) {
            if (!empty($map['LogicResource'])) {
                $model->logicResource = [];
                $n                    = 0;
                foreach ($map['LogicResource'] as $item) {
                    $model->logicResource[$n++] = null !== $item ? logicResource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
