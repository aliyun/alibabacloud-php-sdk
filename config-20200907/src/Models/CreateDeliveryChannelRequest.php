<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class CreateDeliveryChannelRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $configurationItemChangeNotification;

    /**
     * @var bool
     */
    public $configurationSnapshot;

    /**
     * @var string
     */
    public $deliveryChannelAssumeRoleArn;

    /**
     * @var string
     */
    public $deliveryChannelCondition;

    /**
     * @var string
     */
    public $deliveryChannelName;

    /**
     * @var string
     */
    public $deliveryChannelTargetArn;

    /**
     * @var string
     */
    public $deliveryChannelType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $nonCompliantNotification;

    /**
     * @var string
     */
    public $oversizedDataOSSTargetArn;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'configurationItemChangeNotification' => 'ConfigurationItemChangeNotification',
        'configurationSnapshot' => 'ConfigurationSnapshot',
        'deliveryChannelAssumeRoleArn' => 'DeliveryChannelAssumeRoleArn',
        'deliveryChannelCondition' => 'DeliveryChannelCondition',
        'deliveryChannelName' => 'DeliveryChannelName',
        'deliveryChannelTargetArn' => 'DeliveryChannelTargetArn',
        'deliveryChannelType' => 'DeliveryChannelType',
        'description' => 'Description',
        'nonCompliantNotification' => 'NonCompliantNotification',
        'oversizedDataOSSTargetArn' => 'OversizedDataOSSTargetArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->configurationItemChangeNotification) {
            $res['ConfigurationItemChangeNotification'] = $this->configurationItemChangeNotification;
        }

        if (null !== $this->configurationSnapshot) {
            $res['ConfigurationSnapshot'] = $this->configurationSnapshot;
        }

        if (null !== $this->deliveryChannelAssumeRoleArn) {
            $res['DeliveryChannelAssumeRoleArn'] = $this->deliveryChannelAssumeRoleArn;
        }

        if (null !== $this->deliveryChannelCondition) {
            $res['DeliveryChannelCondition'] = $this->deliveryChannelCondition;
        }

        if (null !== $this->deliveryChannelName) {
            $res['DeliveryChannelName'] = $this->deliveryChannelName;
        }

        if (null !== $this->deliveryChannelTargetArn) {
            $res['DeliveryChannelTargetArn'] = $this->deliveryChannelTargetArn;
        }

        if (null !== $this->deliveryChannelType) {
            $res['DeliveryChannelType'] = $this->deliveryChannelType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->nonCompliantNotification) {
            $res['NonCompliantNotification'] = $this->nonCompliantNotification;
        }

        if (null !== $this->oversizedDataOSSTargetArn) {
            $res['OversizedDataOSSTargetArn'] = $this->oversizedDataOSSTargetArn;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConfigurationItemChangeNotification'])) {
            $model->configurationItemChangeNotification = $map['ConfigurationItemChangeNotification'];
        }

        if (isset($map['ConfigurationSnapshot'])) {
            $model->configurationSnapshot = $map['ConfigurationSnapshot'];
        }

        if (isset($map['DeliveryChannelAssumeRoleArn'])) {
            $model->deliveryChannelAssumeRoleArn = $map['DeliveryChannelAssumeRoleArn'];
        }

        if (isset($map['DeliveryChannelCondition'])) {
            $model->deliveryChannelCondition = $map['DeliveryChannelCondition'];
        }

        if (isset($map['DeliveryChannelName'])) {
            $model->deliveryChannelName = $map['DeliveryChannelName'];
        }

        if (isset($map['DeliveryChannelTargetArn'])) {
            $model->deliveryChannelTargetArn = $map['DeliveryChannelTargetArn'];
        }

        if (isset($map['DeliveryChannelType'])) {
            $model->deliveryChannelType = $map['DeliveryChannelType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['NonCompliantNotification'])) {
            $model->nonCompliantNotification = $map['NonCompliantNotification'];
        }

        if (isset($map['OversizedDataOSSTargetArn'])) {
            $model->oversizedDataOSSTargetArn = $map['OversizedDataOSSTargetArn'];
        }

        return $model;
    }
}
