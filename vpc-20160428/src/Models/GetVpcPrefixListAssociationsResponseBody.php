<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListAssociationsResponseBody\prefixListAssociation;
use AlibabaCloud\Tea\Model;

class GetVpcPrefixListAssociationsResponseBody extends Model
{
    /**
     * @description The number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The token that determines the start point of the next query. Valid values:
     *
     *   If no value is returned for **NextToken**, no next queries are sent.
     *   If **NextToken** is not empty, the value indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The information about the network instances that are associated with the prefix list.
     *
     * @var prefixListAssociation[]
     */
    public $prefixListAssociation;

    /**
     * @description The ID of the request.
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'                 => 'Count',
        'nextToken'             => 'NextToken',
        'prefixListAssociation' => 'PrefixListAssociation',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->prefixListAssociation) {
            $res['PrefixListAssociation'] = [];
            if (null !== $this->prefixListAssociation && \is_array($this->prefixListAssociation)) {
                $n = 0;
                foreach ($this->prefixListAssociation as $item) {
                    $res['PrefixListAssociation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return GetVpcPrefixListAssociationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PrefixListAssociation'])) {
            if (!empty($map['PrefixListAssociation'])) {
                $model->prefixListAssociation = [];
                $n                            = 0;
                foreach ($map['PrefixListAssociation'] as $item) {
                    $model->prefixListAssociation[$n++] = null !== $item ? prefixListAssociation::fromMap($item) : $item;
                }
            }
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
