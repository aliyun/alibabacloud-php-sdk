<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveMessageUserInfoResponseBody\failList;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveMessageUserInfoResponseBody\successList;
use AlibabaCloud\Tea\Model;

class ModifyLiveMessageUserInfoResponseBody extends Model
{
    /**
     * @description The users whose information failed to be modified.
     *
     * @var failList[]
     */
    public $failList;

    /**
     * @description The request ID.
     *
     * @example 3271ACD2-F143-1204-AFDB-9A87C131****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The users whose information was modified.
     *
     * @var successList[]
     */
    public $successList;
    protected $_name = [
        'failList' => 'FailList',
        'requestId' => 'RequestId',
        'successList' => 'SuccessList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failList) {
            $res['FailList'] = [];
            if (null !== $this->failList && \is_array($this->failList)) {
                $n = 0;
                foreach ($this->failList as $item) {
                    $res['FailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successList) {
            $res['SuccessList'] = [];
            if (null !== $this->successList && \is_array($this->successList)) {
                $n = 0;
                foreach ($this->successList as $item) {
                    $res['SuccessList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageUserInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailList'])) {
            if (!empty($map['FailList'])) {
                $model->failList = [];
                $n = 0;
                foreach ($map['FailList'] as $item) {
                    $model->failList[$n++] = null !== $item ? failList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessList'])) {
            if (!empty($map['SuccessList'])) {
                $model->successList = [];
                $n = 0;
                foreach ($map['SuccessList'] as $item) {
                    $model->successList[$n++] = null !== $item ? successList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
