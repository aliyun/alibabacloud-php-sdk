<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Tea\Model;

class ListAnycastEipAddressesRequest extends Model
{
    /**
     * @var string
     */
    public $anycastEipAddress;

    /**
     * @var string
     */
    public $anycastId;

    /**
     * @var string[]
     */
    public $anycastIds;

    /**
     * @var string[]
     */
    public $bindInstanceIds;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $serviceLocation;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'anycastEipAddress'  => 'AnycastEipAddress',
        'anycastId'          => 'AnycastId',
        'anycastIds'         => 'AnycastIds',
        'bindInstanceIds'    => 'BindInstanceIds',
        'businessStatus'     => 'BusinessStatus',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'maxResults'         => 'MaxResults',
        'name'               => 'Name',
        'nextToken'          => 'NextToken',
        'serviceLocation'    => 'ServiceLocation',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastEipAddress) {
            $res['AnycastEipAddress'] = $this->anycastEipAddress;
        }
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->anycastIds) {
            $res['AnycastIds'] = $this->anycastIds;
        }
        if (null !== $this->bindInstanceIds) {
            $res['BindInstanceIds'] = $this->bindInstanceIds;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAnycastEipAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastEipAddress'])) {
            $model->anycastEipAddress = $map['AnycastEipAddress'];
        }
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['AnycastIds'])) {
            if (!empty($map['AnycastIds'])) {
                $model->anycastIds = $map['AnycastIds'];
            }
        }
        if (isset($map['BindInstanceIds'])) {
            if (!empty($map['BindInstanceIds'])) {
                $model->bindInstanceIds = $map['BindInstanceIds'];
            }
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
