<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody\TLSCipherPolicies;

class ListTLSCipherPoliciesResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var TLSCipherPolicies[]
     */
    public $TLSCipherPolicies;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'isTruncated' => 'IsTruncated',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'TLSCipherPolicies' => 'TLSCipherPolicies',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->TLSCipherPolicies)) {
            Model::validateArray($this->TLSCipherPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->TLSCipherPolicies) {
            if (\is_array($this->TLSCipherPolicies)) {
                $res['TLSCipherPolicies'] = [];
                $n1 = 0;
                foreach ($this->TLSCipherPolicies as $item1) {
                    $res['TLSCipherPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TLSCipherPolicies'])) {
            if (!empty($map['TLSCipherPolicies'])) {
                $model->TLSCipherPolicies = [];
                $n1 = 0;
                foreach ($map['TLSCipherPolicies'] as $item1) {
                    $model->TLSCipherPolicies[$n1] = TLSCipherPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
