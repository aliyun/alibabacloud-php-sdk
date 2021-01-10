<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountYunIdInfoResponseBody\yunIdInfo;
use AlibabaCloud\Tea\Model;

class CountYunIdInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var yunIdInfo[]
     */
    public $yunIdInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'yunIdInfo' => 'YunIdInfo',
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
        if (null !== $this->yunIdInfo) {
            $res['YunIdInfo'] = [];
            if (null !== $this->yunIdInfo && \is_array($this->yunIdInfo)) {
                $n = 0;
                foreach ($this->yunIdInfo as $item) {
                    $res['YunIdInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountYunIdInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['YunIdInfo'])) {
            if (!empty($map['YunIdInfo'])) {
                $model->yunIdInfo = [];
                $n                = 0;
                foreach ($map['YunIdInfo'] as $item) {
                    $model->yunIdInfo[$n++] = null !== $item ? yunIdInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
