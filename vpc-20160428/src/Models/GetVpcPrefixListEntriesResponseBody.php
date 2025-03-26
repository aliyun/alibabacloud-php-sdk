<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListEntriesResponseBody\prefixListEntry;

class GetVpcPrefixListEntriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var prefixListEntry[]
     */
    public $prefixListEntry;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'nextToken' => 'NextToken',
        'prefixListEntry' => 'PrefixListEntry',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->prefixListEntry)) {
            Model::validateArray($this->prefixListEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->prefixListEntry) {
            if (\is_array($this->prefixListEntry)) {
                $res['PrefixListEntry'] = [];
                $n1 = 0;
                foreach ($this->prefixListEntry as $item1) {
                    $res['PrefixListEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['PrefixListEntry'] as $item1) {
                    $model->prefixListEntry[$n1++] = prefixListEntry::fromMap($item1);
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
