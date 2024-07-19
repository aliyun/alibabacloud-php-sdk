<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGatewayResponseBody\internetAclPolicyList;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGatewayResponseBody\intranetLinkedVpcList;
use AlibabaCloud\Tea\Model;

class DescribeGatewayResponseBody extends Model
{
    /**
     * @description The UID of the account that is used to create the private gateway.
     *
     * @example 20123*******
     *
     * @var string
     */
    public $callerUid;

    /**
     * @description The time when the private gateway was created. The time is displayed in UTC.
     *
     * @example 2020-05-19T14:19:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the self-managed cluster.
     *
     * @example c935eadf284c14c2da57a2a13ad6******
     *
     * @var string
     */
    public $externalClusterId;

    /**
     * @description The ID of the private gateway.
     *
     * @example gw-1uhcqmsc7x22******
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description The private gateway alias.
     *
     * @example mygateway1
     *
     * @var string
     */
    public $gatewayName;

    /**
     * @description The instance type used for the private gateway.
     *
     * @example ecs.c6.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The Internet access control policies.
     *
     * @var internetAclPolicyList[]
     */
    public $internetAclPolicyList;

    /**
     * @description The public endpoint.
     *
     * @example gw-1uhcqmsc7x22******-1801786532******.cn-hangzhou.pai-eas.aliyuncs.com
     *
     * @var string
     */
    public $internetDomain;

    /**
     * @description Indicates whether Internet access is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $internetEnabled;

    /**
     * @description The internal endpoint.
     *
     * @example gw-1uhcqmsc7x22******-1801786532******-vpc.cn-hangzhou.pai-eas.aliyuncs.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @description Indicates whether internal network access is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $intranetEnabled;

    /**
     * @description The internal endpoints.
     *
     * @var intranetLinkedVpcList[]
     */
    public $intranetLinkedVpcList;

    /**
     * @description The user ID (UID) of the Alibaba Cloud account that is used to create the private gateway.
     *
     * @example 11234*******
     *
     * @var string
     */
    public $parentUid;

    /**
     * @description The region ID of the private gateway.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The state of the private gateway.
     *
     * @example PrivateGatewayRunning
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the private gateway was updated. The time is displayed in UTC.
     *
     * @example 2021-02-24T11:52:17Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'callerUid'             => 'CallerUid',
        'createTime'            => 'CreateTime',
        'externalClusterId'     => 'ExternalClusterId',
        'gatewayId'             => 'GatewayId',
        'gatewayName'           => 'GatewayName',
        'instanceType'          => 'InstanceType',
        'internetAclPolicyList' => 'InternetAclPolicyList',
        'internetDomain'        => 'InternetDomain',
        'internetEnabled'       => 'InternetEnabled',
        'intranetDomain'        => 'IntranetDomain',
        'intranetEnabled'       => 'IntranetEnabled',
        'intranetLinkedVpcList' => 'IntranetLinkedVpcList',
        'parentUid'             => 'ParentUid',
        'region'                => 'Region',
        'requestId'             => 'RequestId',
        'status'                => 'Status',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->externalClusterId) {
            $res['ExternalClusterId'] = $this->externalClusterId;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetAclPolicyList) {
            $res['InternetAclPolicyList'] = [];
            if (null !== $this->internetAclPolicyList && \is_array($this->internetAclPolicyList)) {
                $n = 0;
                foreach ($this->internetAclPolicyList as $item) {
                    $res['InternetAclPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->internetDomain) {
            $res['InternetDomain'] = $this->internetDomain;
        }
        if (null !== $this->internetEnabled) {
            $res['InternetEnabled'] = $this->internetEnabled;
        }
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->intranetEnabled) {
            $res['IntranetEnabled'] = $this->intranetEnabled;
        }
        if (null !== $this->intranetLinkedVpcList) {
            $res['IntranetLinkedVpcList'] = [];
            if (null !== $this->intranetLinkedVpcList && \is_array($this->intranetLinkedVpcList)) {
                $n = 0;
                foreach ($this->intranetLinkedVpcList as $item) {
                    $res['IntranetLinkedVpcList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExternalClusterId'])) {
            $model->externalClusterId = $map['ExternalClusterId'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetAclPolicyList'])) {
            if (!empty($map['InternetAclPolicyList'])) {
                $model->internetAclPolicyList = [];
                $n                            = 0;
                foreach ($map['InternetAclPolicyList'] as $item) {
                    $model->internetAclPolicyList[$n++] = null !== $item ? internetAclPolicyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InternetDomain'])) {
            $model->internetDomain = $map['InternetDomain'];
        }
        if (isset($map['InternetEnabled'])) {
            $model->internetEnabled = $map['InternetEnabled'];
        }
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['IntranetEnabled'])) {
            $model->intranetEnabled = $map['IntranetEnabled'];
        }
        if (isset($map['IntranetLinkedVpcList'])) {
            if (!empty($map['IntranetLinkedVpcList'])) {
                $model->intranetLinkedVpcList = [];
                $n                            = 0;
                foreach ($map['IntranetLinkedVpcList'] as $item) {
                    $model->intranetLinkedVpcList[$n++] = null !== $item ? intranetLinkedVpcList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
