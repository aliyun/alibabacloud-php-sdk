<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeRiskCheckResultRequest extends Model
{
    /**
     * @description The cloud service whose configuration check results you want to query. For more information about the check items for the cloud service, see the check item table in the "Response parameters" section of this topic.
     *
     * @example RDS
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The type of the check item that you want to query. Valid values:
     *
     *   **1**: identity authentication and permissions
     *   **2**: network access control
     *   **3**: log audit
     *   **4**: data security
     *   **5**: monitoring and alerting
     *   **6**: basic security protection
     *
     * > If you do not specify this parameter, all types of check items are queried.
     * @example 1
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the check item. For more information about the check item, see the check item table in the "Response parameters" section of this topic.
     *
     * @example 1
     *
     * @var string[]
     */
    public $itemIds;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the check item. For more information about the check item, see the check item table in the "Response parameters" section of this topic.
     *
     * @example ALB_NetWorkAccessControl
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether the check item is supported by the edition of Security Center that you purchase. Valid values:
     *
     *   **enabled**: yes
     *   **disabled**: no
     *
     * @example enabled
     *
     * @var string
     */
    public $queryFlag;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The risk level of the check item that you want to query. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The status of the check results. Valid values:
     *
     *   **pass**
     *   **failed**
     *   **running**
     *   **waiting**
     *   **ignored**
     *   **falsePositive**
     *
     * @example pass
     *
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
