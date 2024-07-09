<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverEndpointResponseBody\ipConfigs;
use AlibabaCloud\Tea\Model;

class DescribeResolverEndpointResponseBody extends Model
{
    /**
     * @description The time when the endpoint was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2020-07-13 10:45:56
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the endpoint was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1594608356000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The endpoint ID.
     *
     * @example hra0**
     *
     * @var string
     */
    public $id;

    /**
     * @description The source IP address of outbound traffic.
     *
     * @var ipConfigs[]
     */
    public $ipConfigs;

    /**
     * @description The endpoint name.
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 45020ED9-6319-4CA7-9475-6E8D6446E84F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security group ID.
     *
     * @example sg-8vb3sigz86xc-group-test
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The state of the endpoint. Valid values:
     *
     *   SUCCESS: The endpoint works as expected.
     *   INIT: The endpoint is being created.
     *   FAILED: The endpoint fails to be created.
     *   CHANGE_INIT: The endpoint is being modified.
     *   CHANGE_FAILED: The endpoint fails to be modified.
     *   EXCEPTION: The endpoint encounters an exception.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the endpoint was last modified. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2020-07-13 10:48:39
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The time when the endpoint was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1594608519000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description The outbound VPC ID.
     *
     * @example vpc-8vbl8mpum-vpc-id
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The outbound VPC name.
     *
     * @example vpc-name-test
     *
     * @var string
     */
    public $vpcName;

    /**
     * @description The ID of the region where the outbound VPC resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;

    /**
     * @description The name of the region where the outbound virtual private cloud (VPC) resides.
     *
     * @var string
     */
    public $vpcRegionName;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'id'              => 'Id',
        'ipConfigs'       => 'IpConfigs',
        'name'            => 'Name',
        'requestId'       => 'RequestId',
        'securityGroupId' => 'SecurityGroupId',
        'status'          => 'Status',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'vpcId'           => 'VpcId',
        'vpcName'         => 'VpcName',
        'vpcRegionId'     => 'VpcRegionId',
        'vpcRegionName'   => 'VpcRegionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ipConfigs) {
            $res['IpConfigs'] = [];
            if (null !== $this->ipConfigs && \is_array($this->ipConfigs)) {
                $n = 0;
                foreach ($this->ipConfigs as $item) {
                    $res['IpConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }
        if (null !== $this->vpcRegionName) {
            $res['VpcRegionName'] = $this->vpcRegionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResolverEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IpConfigs'])) {
            if (!empty($map['IpConfigs'])) {
                $model->ipConfigs = [];
                $n                = 0;
                foreach ($map['IpConfigs'] as $item) {
                    $model->ipConfigs[$n++] = null !== $item ? ipConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }
        if (isset($map['VpcRegionName'])) {
            $model->vpcRegionName = $map['VpcRegionName'];
        }

        return $model;
    }
}
