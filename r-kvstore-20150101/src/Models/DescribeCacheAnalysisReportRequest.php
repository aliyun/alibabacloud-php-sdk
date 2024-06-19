<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCacheAnalysisReportRequest extends Model
{
    /**
     * @description The type of analytics. Set the value to **BigKey**.
     *
     * This parameter is required.
     * @example BigKey
     *
     * @var string
     */
    public $analysisType;

    /**
     * @description The date to query. You can query the report for one day each time. Specify the date in the *yyyy-MM-dd*Z format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2019-08-05Z
     *
     * @var string
     */
    public $date;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example -bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the child node in the cluster instance.
     *
     * > If this parameter is not specified, the analytics results of all child nodes in the instance are returned.
     * @example -bp1zxszhcgatnx****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return.
     *
     * > If the parameter value exceeds the maximum number of the returned pages, an empty large key list is returned.
     * @example 1
     *
     * @var int
     */
    public $pageNumbers;

    /**
     * @description The number of entries to return on each page. Valid values: **30**, **50**, and **100**.
     *
     * > The default value is **30**.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'analysisType'         => 'AnalysisType',
        'date'                 => 'Date',
        'instanceId'           => 'InstanceId',
        'nodeId'               => 'NodeId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumbers'          => 'PageNumbers',
        'pageSize'             => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisType) {
            $res['AnalysisType'] = $this->analysisType;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCacheAnalysisReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisType'])) {
            $model->analysisType = $map['AnalysisType'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
