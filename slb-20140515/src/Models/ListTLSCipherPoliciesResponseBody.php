<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody\TLSCipherPolicies;
use AlibabaCloud\Tea\Model;

class ListTLSCipherPoliciesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
     * @var bool
     */
    public $isTruncated;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'TLSCipherPolicies' => 'TLSCipherPolicies',
        'isTruncated'       => 'IsTruncated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        return $model;
    }
}
