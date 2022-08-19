<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListAssociationsResponseBody\prefixListAssociation;
use AlibabaCloud\Tea\Model;

class GetVpcPrefixListAssociationsResponseBody extends Model
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
     * @var prefixListAssociation[]
     */
    public $prefixListAssociation;

    /**
     * @var string
     */
    public $requestId;

    /**
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
