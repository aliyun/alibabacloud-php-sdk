<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\BatchIntrudeDomainsResponseBody;

use AlibabaCloud\SDK\Domain\V20180208\Models\BatchIntrudeDomainsResponseBody\data\failureList;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchIntrudeDomainsResponseBody\data\successList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $failureCount;

    /**
     * @var failureList[]
     */
    public $failureList;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var successList[]
     */
    public $successList;
    protected $_name = [
        'failureCount' => 'FailureCount',
        'failureList' => 'FailureList',
        'successCount' => 'SuccessCount',
        'successList' => 'SuccessList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }
        if (null !== $this->failureList) {
            $res['FailureList'] = [];
            if (null !== $this->failureList && \is_array($this->failureList)) {
                $n = 0;
                foreach ($this->failureList as $item) {
                    $res['FailureList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }
        if (isset($map['FailureList'])) {
            if (!empty($map['FailureList'])) {
                $model->failureList = [];
                $n = 0;
                foreach ($map['FailureList'] as $item) {
                    $model->failureList[$n++] = null !== $item ? failureList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
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
