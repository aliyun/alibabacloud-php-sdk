<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class CreateErAttachmentRequest extends Model
{
    /**
     * @description Indicates whether to automatically receive all routes from all instances under the Lingjun HUB. Valid values:
     *
     *   **true**: received automatically.
     *   **false**: Not received.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $autoReceiveAllRoute;

    /**
     * @description The name of the network instance connection.
     *
     * This parameter is required.
     * @example er-attachemnt-vpd-xksd2obl
     *
     * @var string
     */
    public $erAttachmentName;

    /**
     * @description Lingjun HUB ID.
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
     * You can query **Lingjun CIDR Block** and **Lingjun Connection** by [ListVpds](https://help.aliyun.com/document_detail/2331077.html) and [ListVccs](https://help.aliyun.com/document_detail/2399526.html?) respectively.
     *
     * This parameter is required.
     * @example vpd-xksd2obl
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The category of the instance. Valid values:
     *
     *   **VPD**: indicates the Lingjun CIDR block.
     *   **VCC**: indicates a Lingjun connection.
     *
     * This parameter is required.
     * @example VPD
     *
     * @var string
     */
    public $instanceType;

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
     * @description The ID of the tenant to which the resource belongs. This parameter is required for cross-account resources.
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $resourceTenantId;
    protected $_name = [
        'autoReceiveAllRoute' => 'AutoReceiveAllRoute',
        'erAttachmentName'    => 'ErAttachmentName',
        'erId'                => 'ErId',
        'instanceId'          => 'InstanceId',
        'instanceType'        => 'InstanceType',
        'regionId'            => 'RegionId',
        'resourceTenantId'    => 'ResourceTenantId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceTenantId) {
            $res['ResourceTenantId'] = $this->resourceTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateErAttachmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoReceiveAllRoute'])) {
            $model->autoReceiveAllRoute = $map['AutoReceiveAllRoute'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceTenantId'])) {
            $model->resourceTenantId = $map['ResourceTenantId'];
        }

        return $model;
    }
}
