<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserExpResponseBody\expInfoList;
use AlibabaCloud\Tea\Model;

class DescribeCallUserExpResponseBody extends Model
{
    /**
     * @var expInfoList[]
     */
    public $expInfoList;

    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'expInfoList' => 'ExpInfoList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expInfoList) {
            $res['ExpInfoList'] = [];
            if (null !== $this->expInfoList && \is_array($this->expInfoList)) {
                $n = 0;
                foreach ($this->expInfoList as $item) {
                    $res['ExpInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCallUserExpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpInfoList'])) {
            if (!empty($map['ExpInfoList'])) {
                $model->expInfoList = [];
                $n                  = 0;
                foreach ($map['ExpInfoList'] as $item) {
                    $model->expInfoList[$n++] = null !== $item ? expInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
