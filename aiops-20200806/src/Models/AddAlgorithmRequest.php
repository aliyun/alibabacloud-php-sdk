<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class AddAlgorithmRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmId;

    /**
     * @var int
     */
    public $algorithmType;

    /**
     * @var string
     */
    public $businessGroupId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $expandInformation;

    /**
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'algorithmId'       => 'AlgorithmId',
        'algorithmType'     => 'AlgorithmType',
        'businessGroupId'   => 'BusinessGroupId',
        'endTime'           => 'EndTime',
        'expandInformation' => 'ExpandInformation',
        'indexId'           => 'IndexId',
        'instanceId'        => 'InstanceId',
        'operaUid'          => 'OperaUid',
        'productType'       => 'ProductType',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->algorithmType) {
            $res['AlgorithmType'] = $this->algorithmType;
        }
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->expandInformation) {
            $res['ExpandInformation'] = $this->expandInformation;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAlgorithmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['AlgorithmType'])) {
            $model->algorithmType = $map['AlgorithmType'];
        }
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExpandInformation'])) {
            $model->expandInformation = $map['ExpandInformation'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
