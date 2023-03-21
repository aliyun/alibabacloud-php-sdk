<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeRiskCheckResultRequest extends Model
{
    /**
     * @var string
     */
    public $assetType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $itemIds;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryFlag;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'assetType'       => 'AssetType',
        'currentPage'     => 'CurrentPage',
        'groupId'         => 'GroupId',
        'itemIds'         => 'ItemIds',
        'lang'            => 'Lang',
        'name'            => 'Name',
        'pageSize'        => 'PageSize',
        'queryFlag'       => 'QueryFlag',
        'resourceOwnerId' => 'ResourceOwnerId',
        'riskLevel'       => 'RiskLevel',
        'sourceIp'        => 'SourceIp',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->itemIds) {
            $res['ItemIds'] = $this->itemIds;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryFlag) {
            $res['QueryFlag'] = $this->queryFlag;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskCheckResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ItemIds'])) {
            if (!empty($map['ItemIds'])) {
                $model->itemIds = $map['ItemIds'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryFlag'])) {
            $model->queryFlag = $map['QueryFlag'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
