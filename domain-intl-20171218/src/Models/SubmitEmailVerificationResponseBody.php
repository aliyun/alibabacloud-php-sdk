<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\SubmitEmailVerificationResponseBody\existList;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SubmitEmailVerificationResponseBody\failList;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SubmitEmailVerificationResponseBody\successList;
use AlibabaCloud\Tea\Model;

class SubmitEmailVerificationResponseBody extends Model
{
    /**
     * @var existList[]
     */
    public $existList;

    /**
     * @var failList[]
     */
    public $failList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var successList[]
     */
    public $successList;
    protected $_name = [
        'existList'   => 'ExistList',
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
        if (null !== $this->existList) {
            $res['ExistList'] = [];
            if (null !== $this->existList && \is_array($this->existList)) {
                $n = 0;
                foreach ($this->existList as $item) {
                    $res['ExistList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
     * @return SubmitEmailVerificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExistList'])) {
            if (!empty($map['ExistList'])) {
                $model->existList = [];
                $n                = 0;
                foreach ($map['ExistList'] as $item) {
                    $model->existList[$n++] = null !== $item ? existList::fromMap($item) : $item;
                }
            }
        }
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
