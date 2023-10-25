<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody\TLSCipherPolicies;
use AlibabaCloud\Tea\Model;

class ListTLSCipherPoliciesResponseBody extends Model
{
    /**
     * @description Indicates whether the current page is the last page. Valid values:
     *
     *   **true**: The current page is the last page.
     *   **false**: The current page is not the last page.
     *
     * @example false
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If **NextToken** is empty, it indicates that no next query is to be sent.
     *   If **NextToken** is not empty, the value indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BA984
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of TLS policies.
     *
     * @var TLSCipherPolicies[]
     */
    public $TLSCipherPolicies;

    /**
     * @description The total number of TLS policies returned.
     *
     * @example 1000
     *
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
