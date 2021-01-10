<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceModelResponseBody\modelList;
use AlibabaCloud\Tea\Model;

class ListDeviceModelResponseBody extends Model
{
    /**
     * @var modelList[]
     */
    public $modelList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modelList' => 'ModelList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelList) {
            $res['ModelList'] = [];
            if (null !== $this->modelList && \is_array($this->modelList)) {
                $n = 0;
                foreach ($this->modelList as $item) {
                    $res['ModelList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDeviceModelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelList'])) {
            if (!empty($map['ModelList'])) {
                $model->modelList = [];
                $n                = 0;
                foreach ($map['ModelList'] as $item) {
                    $model->modelList[$n++] = null !== $item ? modelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
