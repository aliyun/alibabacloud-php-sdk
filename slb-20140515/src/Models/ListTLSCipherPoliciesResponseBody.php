<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody\TLSCipherPolicies;
use AlibabaCloud\Tea\Model;

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
        'isTruncated'       => 'IsTruncated',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'TLSCipherPolicies' => 'TLSCipherPolicies',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TLSCipherPolicies'] = [];
            if (null !== $this->TLSCipherPolicies && \is_array($this->TLSCipherPolicies)) {
                $n = 0;
                foreach ($this->TLSCipherPolicies as $item) {
                    $res['TLSCipherPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTLSCipherPoliciesResponseBody
     */
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
                $n                        = 0;
                foreach ($map['TLSCipherPolicies'] as $item) {
                    $model->TLSCipherPolicies[$n++] = null !== $item ? TLSCipherPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
