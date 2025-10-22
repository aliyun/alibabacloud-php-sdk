<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\PushDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180208\Models\PushDomainsResponseBody\module\failedResults;

class module extends Model
{
    /**
     * @var failedResults[]
     */
    public $failedResults;

    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var string
     */
    public $pushNo;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string[]
     */
    public $successDomains;
    protected $_name = [
        'failedResults' => 'FailedResults',
        'outBizId' => 'OutBizId',
        'pushNo' => 'PushNo',
        'success' => 'Success',
        'successDomains' => 'SuccessDomains',
    ];

    public function validate()
    {
        if (\is_array($this->failedResults)) {
            Model::validateArray($this->failedResults);
        }
        if (\is_array($this->successDomains)) {
            Model::validateArray($this->successDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedResults) {
            if (\is_array($this->failedResults)) {
                $res['FailedResults'] = [];
                $n1 = 0;
                foreach ($this->failedResults as $item1) {
                    $res['FailedResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }

        if (null !== $this->pushNo) {
            $res['PushNo'] = $this->pushNo;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->successDomains) {
            if (\is_array($this->successDomains)) {
                $res['SuccessDomains'] = [];
                $n1 = 0;
                foreach ($this->successDomains as $item1) {
                    $res['SuccessDomains'][$n1] = $item1;
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
        if (isset($map['FailedResults'])) {
            if (!empty($map['FailedResults'])) {
                $model->failedResults = [];
                $n1 = 0;
                foreach ($map['FailedResults'] as $item1) {
                    $model->failedResults[$n1] = failedResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }

        if (isset($map['PushNo'])) {
            $model->pushNo = $map['PushNo'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['SuccessDomains'])) {
            if (!empty($map['SuccessDomains'])) {
                $model->successDomains = [];
                $n1 = 0;
                foreach ($map['SuccessDomains'] as $item1) {
                    $model->successDomains[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
