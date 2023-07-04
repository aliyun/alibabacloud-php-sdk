<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListEntriesResponseBody\prefixListEntry;
use AlibabaCloud\Tea\Model;

class GetVpcPrefixListEntriesResponseBody extends Model
{
    /**
     * @description The number of entries.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The token that is used for the next query. Valid values:
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
     * @description The information about the prefix list.
     *
     * @var prefixListEntry[]
     */
    public $prefixListEntry;

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
        'count'           => 'Count',
        'nextToken'       => 'NextToken',
        'prefixListEntry' => 'PrefixListEntry',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
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
        if (null !== $this->prefixListEntry) {
            $res['PrefixListEntry'] = [];
            if (null !== $this->prefixListEntry && \is_array($this->prefixListEntry)) {
                $n = 0;
                foreach ($this->prefixListEntry as $item) {
                    $res['PrefixListEntry'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetVpcPrefixListEntriesResponseBody
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
        if (isset($map['PrefixListEntry'])) {
            if (!empty($map['PrefixListEntry'])) {
                $model->prefixListEntry = [];
                $n                      = 0;
                foreach ($map['PrefixListEntry'] as $item) {
                    $model->prefixListEntry[$n++] = null !== $item ? prefixListEntry::fromMap($item) : $item;
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
