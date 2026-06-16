<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest\createSimilarSecurityEventsQueryTaskRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest\describeInstancesFullStatusRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest\describeSecurityEventOperationStatusRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest\describeSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest\getAssetDetailByUuidRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest\handleSecurityEventsRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest\handleSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest\listInstancesRequest;

class GetAliYunSafeCenterResultRequest extends Model
{
    /**
     * @var createSimilarSecurityEventsQueryTaskRequest
     */
    public $createSimilarSecurityEventsQueryTaskRequest;

    /**
     * @var describeInstancesFullStatusRequest
     */
    public $describeInstancesFullStatusRequest;

    /**
     * @var describeSecurityEventOperationStatusRequest
     */
    public $describeSecurityEventOperationStatusRequest;

    /**
     * @var describeSimilarSecurityEventsRequest
     */
    public $describeSimilarSecurityEventsRequest;

    /**
     * @var getAssetDetailByUuidRequest
     */
    public $getAssetDetailByUuidRequest;

    /**
     * @var handleSecurityEventsRequest
     */
    public $handleSecurityEventsRequest;

    /**
     * @var handleSimilarSecurityEventsRequest
     */
    public $handleSimilarSecurityEventsRequest;

    /**
     * @var string
     */
    public $interfaceCode;

    /**
     * @var listInstancesRequest
     */
    public $listInstancesRequest;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'createSimilarSecurityEventsQueryTaskRequest' => 'CreateSimilarSecurityEventsQueryTaskRequest',
        'describeInstancesFullStatusRequest' => 'DescribeInstancesFullStatusRequest',
        'describeSecurityEventOperationStatusRequest' => 'DescribeSecurityEventOperationStatusRequest',
        'describeSimilarSecurityEventsRequest' => 'DescribeSimilarSecurityEventsRequest',
        'getAssetDetailByUuidRequest' => 'GetAssetDetailByUuidRequest',
        'handleSecurityEventsRequest' => 'HandleSecurityEventsRequest',
        'handleSimilarSecurityEventsRequest' => 'HandleSimilarSecurityEventsRequest',
        'interfaceCode' => 'InterfaceCode',
        'listInstancesRequest' => 'ListInstancesRequest',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->createSimilarSecurityEventsQueryTaskRequest) {
            $this->createSimilarSecurityEventsQueryTaskRequest->validate();
        }
        if (null !== $this->describeInstancesFullStatusRequest) {
            $this->describeInstancesFullStatusRequest->validate();
        }
        if (null !== $this->describeSecurityEventOperationStatusRequest) {
            $this->describeSecurityEventOperationStatusRequest->validate();
        }
        if (null !== $this->describeSimilarSecurityEventsRequest) {
            $this->describeSimilarSecurityEventsRequest->validate();
        }
        if (null !== $this->getAssetDetailByUuidRequest) {
            $this->getAssetDetailByUuidRequest->validate();
        }
        if (null !== $this->handleSecurityEventsRequest) {
            $this->handleSecurityEventsRequest->validate();
        }
        if (null !== $this->handleSimilarSecurityEventsRequest) {
            $this->handleSimilarSecurityEventsRequest->validate();
        }
        if (null !== $this->listInstancesRequest) {
            $this->listInstancesRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createSimilarSecurityEventsQueryTaskRequest) {
            $res['CreateSimilarSecurityEventsQueryTaskRequest'] = null !== $this->createSimilarSecurityEventsQueryTaskRequest ? $this->createSimilarSecurityEventsQueryTaskRequest->toArray($noStream) : $this->createSimilarSecurityEventsQueryTaskRequest;
        }

        if (null !== $this->describeInstancesFullStatusRequest) {
            $res['DescribeInstancesFullStatusRequest'] = null !== $this->describeInstancesFullStatusRequest ? $this->describeInstancesFullStatusRequest->toArray($noStream) : $this->describeInstancesFullStatusRequest;
        }

        if (null !== $this->describeSecurityEventOperationStatusRequest) {
            $res['DescribeSecurityEventOperationStatusRequest'] = null !== $this->describeSecurityEventOperationStatusRequest ? $this->describeSecurityEventOperationStatusRequest->toArray($noStream) : $this->describeSecurityEventOperationStatusRequest;
        }

        if (null !== $this->describeSimilarSecurityEventsRequest) {
            $res['DescribeSimilarSecurityEventsRequest'] = null !== $this->describeSimilarSecurityEventsRequest ? $this->describeSimilarSecurityEventsRequest->toArray($noStream) : $this->describeSimilarSecurityEventsRequest;
        }

        if (null !== $this->getAssetDetailByUuidRequest) {
            $res['GetAssetDetailByUuidRequest'] = null !== $this->getAssetDetailByUuidRequest ? $this->getAssetDetailByUuidRequest->toArray($noStream) : $this->getAssetDetailByUuidRequest;
        }

        if (null !== $this->handleSecurityEventsRequest) {
            $res['HandleSecurityEventsRequest'] = null !== $this->handleSecurityEventsRequest ? $this->handleSecurityEventsRequest->toArray($noStream) : $this->handleSecurityEventsRequest;
        }

        if (null !== $this->handleSimilarSecurityEventsRequest) {
            $res['HandleSimilarSecurityEventsRequest'] = null !== $this->handleSimilarSecurityEventsRequest ? $this->handleSimilarSecurityEventsRequest->toArray($noStream) : $this->handleSimilarSecurityEventsRequest;
        }

        if (null !== $this->interfaceCode) {
            $res['InterfaceCode'] = $this->interfaceCode;
        }

        if (null !== $this->listInstancesRequest) {
            $res['ListInstancesRequest'] = null !== $this->listInstancesRequest ? $this->listInstancesRequest->toArray($noStream) : $this->listInstancesRequest;
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
            $model->createSimilarSecurityEventsQueryTaskRequest = createSimilarSecurityEventsQueryTaskRequest::fromMap($map['CreateSimilarSecurityEventsQueryTaskRequest']);
        }

        if (isset($map['DescribeInstancesFullStatusRequest'])) {
            $model->describeInstancesFullStatusRequest = describeInstancesFullStatusRequest::fromMap($map['DescribeInstancesFullStatusRequest']);
        }

        if (isset($map['DescribeSecurityEventOperationStatusRequest'])) {
            $model->describeSecurityEventOperationStatusRequest = describeSecurityEventOperationStatusRequest::fromMap($map['DescribeSecurityEventOperationStatusRequest']);
        }

        if (isset($map['DescribeSimilarSecurityEventsRequest'])) {
            $model->describeSimilarSecurityEventsRequest = describeSimilarSecurityEventsRequest::fromMap($map['DescribeSimilarSecurityEventsRequest']);
        }

        if (isset($map['GetAssetDetailByUuidRequest'])) {
            $model->getAssetDetailByUuidRequest = getAssetDetailByUuidRequest::fromMap($map['GetAssetDetailByUuidRequest']);
        }

        if (isset($map['HandleSecurityEventsRequest'])) {
            $model->handleSecurityEventsRequest = handleSecurityEventsRequest::fromMap($map['HandleSecurityEventsRequest']);
        }

        if (isset($map['HandleSimilarSecurityEventsRequest'])) {
            $model->handleSimilarSecurityEventsRequest = handleSimilarSecurityEventsRequest::fromMap($map['HandleSimilarSecurityEventsRequest']);
        }

        if (isset($map['InterfaceCode'])) {
            $model->interfaceCode = $map['InterfaceCode'];
        }

        if (isset($map['ListInstancesRequest'])) {
            $model->listInstancesRequest = listInstancesRequest::fromMap($map['ListInstancesRequest']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
