<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces;
use AlibabaCloud\Tea\Model;

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
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example ngw-bp1uewa15k4iy5770****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 2315DEB7-5E92-423A-91F7-4C1EC9AD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'associateNetworkInterfaces' => 'AssociateNetworkInterfaces',
        'count'                      => 'Count',
        'maxResults'                 => 'MaxResults',
        'natGatewayId'               => 'NatGatewayId',
        'nextToken'                  => 'NextToken',
        'requestId'                  => 'RequestId',
        'totalCount'                 => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associateNetworkInterfaces) {
            $res['AssociateNetworkInterfaces'] = null !== $this->associateNetworkInterfaces ? $this->associateNetworkInterfaces->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeNatGatewayAssociateNetworkInterfacesResponseBody
     */
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
