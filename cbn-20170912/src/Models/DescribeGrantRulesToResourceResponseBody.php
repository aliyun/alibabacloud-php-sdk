<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToResourceResponseBody\grantRules;
use AlibabaCloud\Tea\Model;

class DescribeGrantRulesToResourceResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @var grantRules[]
     */
    public $grantRules;

    /**
     * @description The entity that pays the fees of the network instance. Valid values:
     *
     *   **PayByCenOwner**: The fees of the connections and data forwarding on the transit router are paid by the Alibaba Cloud account to which the CEN instance belongs.
     *   **PayByResourceOwner**: The fees of the connections and data forwarding on the transit router are paid by the Alibaba Cloud account to which the network instance belongs.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The ID of the Alibaba Cloud account to which the CEN instance belongs.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where the network instance is deployed.
     *
     * You can call the [DescribeChildInstanceRegions](~~132080~~) operation to query the most recent region list.
     * @example C6E5992C-A57B-5A6C-9B26-568074DC68BA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description *   If you do not set **MaxResults**, it indicates that you do not need to query results in batches. The value of **MaxResults** indicates the total number of entries.
     *   If you specify a value for **MaxResults**, it indicates that you need to query results in batches. The value of **MaxResults** indicates the number of entries to return in each batch. Valid values: **1** to **100**. The value of **MaxResults** in the response indicates the number of entries in the current batch. We recommend that you set **MaxResults** to **20**.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'grantRules' => 'GrantRules',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantRules) {
            $res['GrantRules'] = [];
            if (null !== $this->grantRules && \is_array($this->grantRules)) {
                $n = 0;
                foreach ($this->grantRules as $item) {
                    $res['GrantRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGrantRulesToResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantRules'])) {
            if (!empty($map['GrantRules'])) {
                $model->grantRules = [];
                $n                 = 0;
                foreach ($map['GrantRules'] as $item) {
                    $model->grantRules[$n++] = null !== $item ? grantRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
