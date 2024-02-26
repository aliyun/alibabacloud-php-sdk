<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DescribeEndpointResponseBody extends Model
{
    /**
     * @example 2014-10-02T15:01:23Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2014-10-02T15:01:23Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example endpoint-1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1557702098194904
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example A731A84D-55C9-44F7-99BB-E1CF0CF19197
     *
     * @var string
     */
    public $requestId;

    /**
     * @var EndpointStatus
     */
    public $status;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @example 276065346797410278
     *
     * @var string
     */
    public $userId;

    /**
     * @example end-ivrq92qhbyrg4jctih
     *
     * @var string
     */
    public $uuid;

    /**
     * @example vpc-j6co2fcdsl1q0gnuc3ym3
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-j6cmr00qjyrft6jo2mg7g
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'name'            => 'Name',
        'ownerId'         => 'OwnerId',
        'requestId'       => 'RequestId',
        'status'          => 'Status',
        'type'            => 'Type',
        'userId'          => 'UserId',
        'uuid'            => 'Uuid',
        'vpcId'           => 'VpcId',
        'vswitchId'       => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = EndpointStatus::fromMap($map['Status']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
