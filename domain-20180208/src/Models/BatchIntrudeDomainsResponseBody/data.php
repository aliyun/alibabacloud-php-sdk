<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\BatchIntrudeDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchIntrudeDomainsResponseBody\data\failureList;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchIntrudeDomainsResponseBody\data\successList;

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

    public function validate()
    {
        if (\is_array($this->failureList)) {
            Model::validateArray($this->failureList);
        }
        if (\is_array($this->successList)) {
            Model::validateArray($this->successList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }

        if (null !== $this->failureList) {
            if (\is_array($this->failureList)) {
                $res['FailureList'] = [];
                $n1 = 0;
                foreach ($this->failureList as $item1) {
                    $res['FailureList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->successList) {
            if (\is_array($this->successList)) {
                $res['SuccessList'] = [];
                $n1 = 0;
                foreach ($this->successList as $item1) {
                    $res['SuccessList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }

        if (isset($map['FailureList'])) {
            if (!empty($map['FailureList'])) {
                $model->failureList = [];
                $n1 = 0;
                foreach ($map['FailureList'] as $item1) {
                    $model->failureList[$n1] = failureList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['SuccessList'])) {
            if (!empty($map['SuccessList'])) {
                $model->successList = [];
                $n1 = 0;
                foreach ($map['SuccessList'] as $item1) {
                    $model->successList[$n1] = successList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
