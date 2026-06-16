<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class GetAliYunSafeCenterResultShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $createSimilarSecurityEventsQueryTaskRequestShrink;

    /**
     * @var string
     */
    public $describeInstancesFullStatusRequestShrink;

    /**
     * @var string
     */
    public $describeSecurityEventOperationStatusRequestShrink;

    /**
     * @var string
     */
    public $describeSimilarSecurityEventsRequestShrink;

    /**
     * @var string
     */
    public $getAssetDetailByUuidRequestShrink;

    /**
     * @var string
     */
    public $handleSecurityEventsRequestShrink;

    /**
     * @var string
     */
    public $handleSimilarSecurityEventsRequestShrink;

    /**
     * @var string
     */
    public $interfaceCode;

    /**
     * @var string
     */
    public $listInstancesRequestShrink;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'createSimilarSecurityEventsQueryTaskRequestShrink' => 'CreateSimilarSecurityEventsQueryTaskRequest',
        'describeInstancesFullStatusRequestShrink' => 'DescribeInstancesFullStatusRequest',
        'describeSecurityEventOperationStatusRequestShrink' => 'DescribeSecurityEventOperationStatusRequest',
        'describeSimilarSecurityEventsRequestShrink' => 'DescribeSimilarSecurityEventsRequest',
        'getAssetDetailByUuidRequestShrink' => 'GetAssetDetailByUuidRequest',
        'handleSecurityEventsRequestShrink' => 'HandleSecurityEventsRequest',
        'handleSimilarSecurityEventsRequestShrink' => 'HandleSimilarSecurityEventsRequest',
        'interfaceCode' => 'InterfaceCode',
        'listInstancesRequestShrink' => 'ListInstancesRequest',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createSimilarSecurityEventsQueryTaskRequestShrink) {
            $res['CreateSimilarSecurityEventsQueryTaskRequest'] = $this->createSimilarSecurityEventsQueryTaskRequestShrink;
        }

        if (null !== $this->describeInstancesFullStatusRequestShrink) {
            $res['DescribeInstancesFullStatusRequest'] = $this->describeInstancesFullStatusRequestShrink;
        }

        if (null !== $this->describeSecurityEventOperationStatusRequestShrink) {
            $res['DescribeSecurityEventOperationStatusRequest'] = $this->describeSecurityEventOperationStatusRequestShrink;
        }

        if (null !== $this->describeSimilarSecurityEventsRequestShrink) {
            $res['DescribeSimilarSecurityEventsRequest'] = $this->describeSimilarSecurityEventsRequestShrink;
        }

        if (null !== $this->getAssetDetailByUuidRequestShrink) {
            $res['GetAssetDetailByUuidRequest'] = $this->getAssetDetailByUuidRequestShrink;
        }

        if (null !== $this->handleSecurityEventsRequestShrink) {
            $res['HandleSecurityEventsRequest'] = $this->handleSecurityEventsRequestShrink;
        }

        if (null !== $this->handleSimilarSecurityEventsRequestShrink) {
            $res['HandleSimilarSecurityEventsRequest'] = $this->handleSimilarSecurityEventsRequestShrink;
        }

        if (null !== $this->interfaceCode) {
            $res['InterfaceCode'] = $this->interfaceCode;
        }

        if (null !== $this->listInstancesRequestShrink) {
            $res['ListInstancesRequest'] = $this->listInstancesRequestShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CreateSimilarSecurityEventsQueryTaskRequest'])) {
            $model->createSimilarSecurityEventsQueryTaskRequestShrink = $map['CreateSimilarSecurityEventsQueryTaskRequest'];
        }

        if (isset($map['DescribeInstancesFullStatusRequest'])) {
            $model->describeInstancesFullStatusRequestShrink = $map['DescribeInstancesFullStatusRequest'];
        }

        if (isset($map['DescribeSecurityEventOperationStatusRequest'])) {
            $model->describeSecurityEventOperationStatusRequestShrink = $map['DescribeSecurityEventOperationStatusRequest'];
        }

        if (isset($map['DescribeSimilarSecurityEventsRequest'])) {
            $model->describeSimilarSecurityEventsRequestShrink = $map['DescribeSimilarSecurityEventsRequest'];
        }

        if (isset($map['GetAssetDetailByUuidRequest'])) {
            $model->getAssetDetailByUuidRequestShrink = $map['GetAssetDetailByUuidRequest'];
        }

        if (isset($map['HandleSecurityEventsRequest'])) {
            $model->handleSecurityEventsRequestShrink = $map['HandleSecurityEventsRequest'];
        }

        if (isset($map['HandleSimilarSecurityEventsRequest'])) {
            $model->handleSimilarSecurityEventsRequestShrink = $map['HandleSimilarSecurityEventsRequest'];
        }

        if (isset($map['InterfaceCode'])) {
            $model->interfaceCode = $map['InterfaceCode'];
        }

        if (isset($map['ListInstancesRequest'])) {
            $model->listInstancesRequestShrink = $map['ListInstancesRequest'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
