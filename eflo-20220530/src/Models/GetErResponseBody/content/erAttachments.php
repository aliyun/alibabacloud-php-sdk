<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody\content;

use AlibabaCloud\Tea\Model;

class erAttachments extends Model
{
    /**
     * @description Cross-account
     *
     * @example false
     *
     * @var bool
     */
    public $across;

    /**
     * @description Receive all routes automatically
     *
     * @example true
     *
     * @var bool
     */
    public $autoReceiveAllRoute;

    /**
     * @description The time when the data address was created.
     *
     * @example 1644283112720
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The connection ID of the Lingjun HUB network instance.
     *
     * @example er-attachment-f32hxfsu
     *
     * @var string
     */
    public $erAttachmentId;

    /**
     * @description Network Instance Name
     *
     * @example fudan-egpu
     *
     * @var string
     */
    public $erAttachmentName;

    /**
     * @description Lingjun HUB Instance ID
     *
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1649303733000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The instance ID.
     *
     * @example vpd-kkopgtne
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the ECU.
     *
     * @example zhijiao
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Instance type: VPD and VCC
     *
     * Valid value:
     *
     *   VCC: Lingjun Connection.
     *   VPD: Lingjun network segment.
     *
     * @example VPD
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The synchronized region where the ECS instances are deployed.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-acfmzzka6bnjvbi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the tenant to which the resource belongs.
     *
     * @example xxxxxxxx
     *
     * @var string
     */
    public $resourceTenantId;

    /**
     * @description The status of the intervention entry. Valid value:
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example 1620939556166277
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
     * @return erAttachments
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
