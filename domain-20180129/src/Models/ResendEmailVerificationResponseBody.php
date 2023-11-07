<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\ResendEmailVerificationResponseBody\failList;
use AlibabaCloud\SDK\Domain\V20180129\Models\ResendEmailVerificationResponseBody\successList;
use AlibabaCloud\Tea\Model;

class ResendEmailVerificationResponseBody extends Model
{
    /**
     * @var failList[]
     */
    public $failList;

    /**
     * @example 0EA54E99-DB48-4CE3-A099-6ED8E451B8AC
     *
     * @var string
     */
    public $requestId;

    /**
     * @var successList[]
     */
    public $successList;
    protected $_name = [
        'failList'    => 'FailList',
        'requestId'   => 'RequestId',
        'successList' => 'SuccessList',
    ];

    public function validate()
    {
    }

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
     * @return ResendEmailVerificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailList'])) {
            if (!empty($map['FailList'])) {
                $model->failList = [];
                $n               = 0;
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
                $n                  = 0;
                foreach ($map['SuccessList'] as $item) {
                    $model->successList[$n++] = null !== $item ? successList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
