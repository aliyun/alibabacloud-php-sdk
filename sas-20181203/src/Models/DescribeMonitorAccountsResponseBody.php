<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeMonitorAccountsResponseBody\accountIdInfos;

class DescribeMonitorAccountsResponseBody extends Model
{
    /**
     * @var accountIdInfos[]
     */
    public $accountIdInfos;

    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountIdInfos' => 'AccountIdInfos',
        'accountIds' => 'AccountIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->accountIdInfos)) {
            Model::validateArray($this->accountIdInfos);
        }
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIdInfos) {
            if (\is_array($this->accountIdInfos)) {
                $res['AccountIdInfos'] = [];
                $n1 = 0;
                foreach ($this->accountIdInfos as $item1) {
                    $res['AccountIdInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccountIdInfos'])) {
            if (!empty($map['AccountIdInfos'])) {
                $model->accountIdInfos = [];
                $n1 = 0;
                foreach ($map['AccountIdInfos'] as $item1) {
                    $model->accountIdInfos[$n1] = accountIdInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
