<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeExpressConnectTrafficQosRequest extends Model
{
    /**
     * @example 02fb3da4-130e-11e9-8e44-0016e04115b
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string[]
     */
    public $qosIdList;

    /**
     * @var string[]
     */
    public $qosNameList;

    /**
     * @description This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'qosIdList'            => 'QosIdList',
        'qosNameList'          => 'QosNameList',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->qosIdList) {
            $res['QosIdList'] = $this->qosIdList;
        }
        if (null !== $this->qosNameList) {
            $res['QosNameList'] = $this->qosNameList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExpressConnectTrafficQosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QosIdList'])) {
            if (!empty($map['QosIdList'])) {
                $model->qosIdList = $map['QosIdList'];
            }
        }
        if (isset($map['QosNameList'])) {
            if (!empty($map['QosNameList'])) {
                $model->qosNameList = $map['QosNameList'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        return $model;
    }
}
