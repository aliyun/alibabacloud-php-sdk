<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListAssociationsResponseBody\prefixListAssociation;

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
        'count' => 'Count',
        'nextToken' => 'NextToken',
        'prefixListAssociation' => 'PrefixListAssociation',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->prefixListAssociation)) {
            Model::validateArray($this->prefixListAssociation);
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

        if (null !== $this->prefixListAssociation) {
            if (\is_array($this->prefixListAssociation)) {
                $res['PrefixListAssociation'] = [];
                $n1 = 0;
                foreach ($this->prefixListAssociation as $item1) {
                    $res['PrefixListAssociation'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['PrefixListAssociation'])) {
            if (!empty($map['PrefixListAssociation'])) {
                $model->prefixListAssociation = [];
                $n1 = 0;
                foreach ($map['PrefixListAssociation'] as $item1) {
                    $model->prefixListAssociation[$n1++] = prefixListAssociation::fromMap($item1);
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
