<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeDeliveryChannelsResponse;

use AlibabaCloud\Tea\Model;

class deliveryChannels extends Model
{
    /**
     * @var string
     */
    public $deliveryChannelId;

    /**
     * @var string
     */
    public $deliveryChannelName;

    /**
     * @var string
     */
    public $deliveryChannelType;

    /**
     * @var string
     */
    public $deliveryChannelTargetArn;

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
    public $description;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'deliveryChannelId'            => 'DeliveryChannelId',
        'deliveryChannelName'          => 'DeliveryChannelName',
        'deliveryChannelType'          => 'DeliveryChannelType',
        'deliveryChannelTargetArn'     => 'DeliveryChannelTargetArn',
        'deliveryChannelAssumeRoleArn' => 'DeliveryChannelAssumeRoleArn',
        'deliveryChannelCondition'     => 'DeliveryChannelCondition',
        'description'                  => 'Description',
        'status'                       => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('deliveryChannelId', $this->deliveryChannelId, true);
        Model::validateRequired('deliveryChannelName', $this->deliveryChannelName, true);
        Model::validateRequired('deliveryChannelType', $this->deliveryChannelType, true);
        Model::validateRequired('deliveryChannelTargetArn', $this->deliveryChannelTargetArn, true);
        Model::validateRequired('deliveryChannelAssumeRoleArn', $this->deliveryChannelAssumeRoleArn, true);
        Model::validateRequired('deliveryChannelCondition', $this->deliveryChannelCondition, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryChannelId) {
            $res['DeliveryChannelId'] = $this->deliveryChannelId;
        }
        if (null !== $this->deliveryChannelName) {
            $res['DeliveryChannelName'] = $this->deliveryChannelName;
        }
        if (null !== $this->deliveryChannelType) {
            $res['DeliveryChannelType'] = $this->deliveryChannelType;
        }
        if (null !== $this->deliveryChannelTargetArn) {
            $res['DeliveryChannelTargetArn'] = $this->deliveryChannelTargetArn;
        }
        if (null !== $this->deliveryChannelAssumeRoleArn) {
            $res['DeliveryChannelAssumeRoleArn'] = $this->deliveryChannelAssumeRoleArn;
        }
        if (null !== $this->deliveryChannelCondition) {
            $res['DeliveryChannelCondition'] = $this->deliveryChannelCondition;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliveryChannels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryChannelId'])) {
            $model->deliveryChannelId = $map['DeliveryChannelId'];
        }
        if (isset($map['DeliveryChannelName'])) {
            $model->deliveryChannelName = $map['DeliveryChannelName'];
        }
        if (isset($map['DeliveryChannelType'])) {
            $model->deliveryChannelType = $map['DeliveryChannelType'];
        }
        if (isset($map['DeliveryChannelTargetArn'])) {
            $model->deliveryChannelTargetArn = $map['DeliveryChannelTargetArn'];
        }
        if (isset($map['DeliveryChannelAssumeRoleArn'])) {
            $model->deliveryChannelAssumeRoleArn = $map['DeliveryChannelAssumeRoleArn'];
        }
        if (isset($map['DeliveryChannelCondition'])) {
            $model->deliveryChannelCondition = $map['DeliveryChannelCondition'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
