<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGatewayAttributeResponseBody\endpoints;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGatewayAttributeResponseBody\securityIPArrays;

class DescribeGatewayAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $gwDescription;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityIPArrays[]
     */
    public $securityIPArrays;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'classCode' => 'ClassCode',
        'createTime' => 'CreateTime',
        'dbType' => 'DbType',
        'endpoints' => 'Endpoints',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'gwClusterId' => 'GwClusterId',
        'gwDescription' => 'GwDescription',
        'modifyTime' => 'ModifyTime',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'securityIPArrays' => 'SecurityIPArrays',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (\is_array($this->securityIPArrays)) {
            Model::validateArray($this->securityIPArrays);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['Endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['Endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->gwDescription) {
            $res['GwDescription'] = $this->gwDescription;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityIPArrays) {
            if (\is_array($this->securityIPArrays)) {
                $res['SecurityIPArrays'] = [];
                $n1 = 0;
                foreach ($this->securityIPArrays as $item1) {
                    $res['SecurityIPArrays'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['Endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['GwDescription'])) {
            $model->gwDescription = $map['GwDescription'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityIPArrays'])) {
            if (!empty($map['SecurityIPArrays'])) {
                $model->securityIPArrays = [];
                $n1 = 0;
                foreach ($map['SecurityIPArrays'] as $item1) {
                    $model->securityIPArrays[$n1] = securityIPArrays::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
