<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class AppServiceProfile extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $designType;

    /**
     * @var string
     */
    public $designTypeText;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $serviceSpec;

    /**
     * @var string
     */
    public $serviceSpecText;
    protected $_name = [
        'bizId' => 'BizId',
        'designType' => 'DesignType',
        'designTypeText' => 'DesignTypeText',
        'instanceId' => 'InstanceId',
        'orderId' => 'OrderId',
        'serviceSpec' => 'ServiceSpec',
        'serviceSpecText' => 'ServiceSpecText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->designType) {
            $res['DesignType'] = $this->designType;
        }

        if (null !== $this->designTypeText) {
            $res['DesignTypeText'] = $this->designTypeText;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->serviceSpec) {
            $res['ServiceSpec'] = $this->serviceSpec;
        }

        if (null !== $this->serviceSpecText) {
            $res['ServiceSpecText'] = $this->serviceSpecText;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DesignType'])) {
            $model->designType = $map['DesignType'];
        }

        if (isset($map['DesignTypeText'])) {
            $model->designTypeText = $map['DesignTypeText'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['ServiceSpec'])) {
            $model->serviceSpec = $map['ServiceSpec'];
        }

        if (isset($map['ServiceSpecText'])) {
            $model->serviceSpecText = $map['ServiceSpecText'];
        }

        return $model;
    }
}
