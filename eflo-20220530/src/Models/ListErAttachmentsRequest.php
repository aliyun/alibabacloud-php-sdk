<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListErAttachmentsRequest extends Model
{
    /**
     * @description Whether to automatically receive all routes from all instances under this Lingjun HUB. Valid values:
     *
     *   **true**: received automatically.
     *   **false**: Not received.
     *
     * @example true
     *
     * @var bool
     */
    public $autoReceiveAllRoute;

    /**
     * @description Specifies whether to enable paged query. Valid values:
     *
     *   **true**: enables paged query.
     *   **false**: Paged query is not enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description The ID of the network instance connection
     *
     * @example er-attachment-i1ioibyf
     *
     * @var string
     */
    public $erAttachmentId;

    /**
     * @description The name of the network instance connection.
     *
     * @example vcc-cn-209300qha01
     *
     * @var string
     */
    public $erAttachmentName;

    /**
     * @description The ID of the Lingjun HUB instance.
     *
     * This parameter is required.
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description The ID of the network instance. Valid values: **VPD** and **VCC**.
     *
     * For more information, see [What is Lingjun?](https://help.aliyun.com/document_detail/444430.html)
     *
     * You can query **Lingjun CIDR blocks** and **Lingjun connections** by [ListVpds](https://help.aliyun.com/document_detail/2331077.html) and [ListVccs](https://help.aliyun.com/document_detail/2399526.html?) respectively.
     * @example vcc-cn-209300qha01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The mitigation plan of the instance. Valid values:
     *
     *   **VPD**: indicates the Lingjun CIDR block.
     *   **VCC**: indicates a Lingjun connection.
     *
     * @example VCC
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The page number to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-aekzb3n5lgk2ieq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the tenant to which the instance belongs.
     *
     * @example 1111156667137893
     *
     * @var string
     */
    public $resourceTenantId;

    /**
     * @description The status of the CLB instance. Valid values:
     *
     *   **Available**: Normal.
     *   **Not Available**: Not available.
     *   **Executing**: The task is being executed.
     *   **Deleting**: The account is being deleted
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'autoReceiveAllRoute' => 'AutoReceiveAllRoute',
        'enablePage'          => 'EnablePage',
        'erAttachmentId'      => 'ErAttachmentId',
        'erAttachmentName'    => 'ErAttachmentName',
        'erId'                => 'ErId',
        'instanceId'          => 'InstanceId',
        'instanceType'        => 'InstanceType',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceTenantId'    => 'ResourceTenantId',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoReceiveAllRoute) {
            $res['AutoReceiveAllRoute'] = $this->autoReceiveAllRoute;
        }
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->erAttachmentId) {
            $res['ErAttachmentId'] = $this->erAttachmentId;
        }
        if (null !== $this->erAttachmentName) {
            $res['ErAttachmentName'] = $this->erAttachmentName;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceTenantId) {
            $res['ResourceTenantId'] = $this->resourceTenantId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListErAttachmentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoReceiveAllRoute'])) {
            $model->autoReceiveAllRoute = $map['AutoReceiveAllRoute'];
        }
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['ErAttachmentId'])) {
            $model->erAttachmentId = $map['ErAttachmentId'];
        }
        if (isset($map['ErAttachmentName'])) {
            $model->erAttachmentName = $map['ErAttachmentName'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceTenantId'])) {
            $model->resourceTenantId = $map['ResourceTenantId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
