<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces;

class DescribeNatGatewayAssociateNetworkInterfacesResponseBody extends Model
{
    /**
     * @var associateNetworkInterfaces
     */
    public $associateNetworkInterfaces;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'associateNetworkInterfaces' => 'AssociateNetworkInterfaces',
        'count' => 'Count',
        'maxResults' => 'MaxResults',
        'natGatewayId' => 'NatGatewayId',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->associateNetworkInterfaces) {
            $this->associateNetworkInterfaces->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associateNetworkInterfaces) {
            $res['AssociateNetworkInterfaces'] = null !== $this->associateNetworkInterfaces ? $this->associateNetworkInterfaces->toArray($noStream) : $this->associateNetworkInterfaces;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateNetworkInterfaces'])) {
            $model->associateNetworkInterfaces = associateNetworkInterfaces::fromMap($map['AssociateNetworkInterfaces']);
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
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
