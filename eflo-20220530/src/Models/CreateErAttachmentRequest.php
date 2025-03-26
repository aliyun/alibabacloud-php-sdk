<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class CreateErAttachmentRequest extends Model
{
    /**
     * @var bool
     */
    public $autoReceiveAllRoute;

    /**
     * @var string
     */
    public $erAttachmentName;

    /**
     * @var string
     */
    public $erId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceTenantId;
    protected $_name = [
        'autoReceiveAllRoute' => 'AutoReceiveAllRoute',
        'erAttachmentName' => 'ErAttachmentName',
        'erId' => 'ErId',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'regionId' => 'RegionId',
        'resourceTenantId' => 'ResourceTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
