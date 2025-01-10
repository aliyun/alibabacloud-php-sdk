<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetErAttachmentResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Whether cross-account. Valid values:
     *
     *   **true**: The network instance is a cross-account resource.
     *   **false**: The current network instance is a resource of the current account.
     *
     * @example fasle
     *
     * @var bool
     */
    public $across;

    /**
     * @description Indicates whether to automatically receive all routes from all instances under the Lingjun HUB. Valid values:
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
     * @description The time when the activation code was created.
     *
     * @example 1648085472000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the Lingjun HUB network instance.
     *
     * @example er-attachment-i1ioibyf
     *
     * @var string
     */
    public $erAttachmentId;

    /**
     * @description The name of the Lingjun HUB network instance.
     *
     * @example vpd-lxnsj2cx
     *
     * @var string
     */
    public $erAttachmentName;

    /**
     * @description The ID of the Lingjun HUB instance.
     *
     * @example er-aueyxxsy
     *
     * @var string
     */
    public $erId;

    /**
     * @description The time when the O\\&M task was modified.
     *
     * @example 1648085472000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the network instance. Valid values: **VPD** and **VCC**.
     *
     * For more information, see [What is Lingjun?](https://help.aliyun.com/document_detail/444430.html)
     *
     * You can query **Lingjun CIDR blocks** and **Lingjun connections** by [ListVpds](https://help.aliyun.com/document_detail/2331077.html) and [ListVccs](https://help.aliyun.com/document_detail/2399526.html?) respectively.
     * @example vpd-lxnsj2cx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example vpd-wulanchabu-main
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The database type. Valid values:
     *
     *   **VPD**: indicates the Lingjun CIDR block.
     *   **VCC**: indicates a Lingjun connection.
     *
     * @example VPD
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The returned message.
     *
     * @example test
     *
     * @var string
     */
    public $message;

    /**
     * @description The region ID.
     *
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
     * @description The ID of the tenant to which the resource belongs.
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $resourceTenantId;

    /**
     * @description The status of the cache reserve instance. Valid values:
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

    /**
     * @description The tenant ID.
     *
     * @example 1655449505171
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'across'              => 'Across',
        'autoReceiveAllRoute' => 'AutoReceiveAllRoute',
        'createTime'          => 'CreateTime',
        'erAttachmentId'      => 'ErAttachmentId',
        'erAttachmentName'    => 'ErAttachmentName',
        'erId'                => 'ErId',
        'gmtModified'         => 'GmtModified',
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'instanceType'        => 'InstanceType',
        'message'             => 'Message',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceTenantId'    => 'ResourceTenantId',
        'status'              => 'Status',
        'tenantId'            => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->across) {
            $res['Across'] = $this->across;
        }
        if (null !== $this->autoReceiveAllRoute) {
            $res['AutoReceiveAllRoute'] = $this->autoReceiveAllRoute;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Across'])) {
            $model->across = $map['Across'];
        }
        if (isset($map['AutoReceiveAllRoute'])) {
            $model->autoReceiveAllRoute = $map['AutoReceiveAllRoute'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
