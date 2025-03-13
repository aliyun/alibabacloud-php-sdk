<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CountTextResponseBody\countTextCmdList;
use AlibabaCloud\Tea\Model;

class CountTextResponseBody extends Model
{
    /**
     * @example 6C9CB64D-E2D3-5BF2-A9E6-2445F952F178
     *
     * @var string
     */
    public $requestId;

    /**
     * @var countTextCmdList[]
     */
    public $countTextCmdList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'countTextCmdList' => 'countTextCmdList',
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
        if (null !== $this->countTextCmdList) {
            $res['countTextCmdList'] = [];
            if (null !== $this->countTextCmdList && \is_array($this->countTextCmdList)) {
                $n = 0;
                foreach ($this->countTextCmdList as $item) {
                    $res['countTextCmdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountTextResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['countTextCmdList'])) {
            if (!empty($map['countTextCmdList'])) {
                $model->countTextCmdList = [];
                $n                       = 0;
                foreach ($map['countTextCmdList'] as $item) {
                    $model->countTextCmdList[$n++] = null !== $item ? countTextCmdList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
