<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeIpsPrivateAssocResponseBody;

use AlibabaCloud\Dara\Model;

class ipsPrivateAssoc extends Model
{
    /**
     * @var string
     */
    public $assocInfoStatus;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var int
     */
    public $memberUid;

    /**
     * @var string[]
     */
    public $protectedIpList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $unprotectedIpList;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'assocInfoStatus' => 'AssocInfoStatus',
        'errorMsg' => 'ErrorMsg',
        'memberUid' => 'MemberUid',
        'protectedIpList' => 'ProtectedIpList',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'status' => 'Status',
        'unprotectedIpList' => 'UnprotectedIpList',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate()
    {
        if (\is_array($this->protectedIpList)) {
            Model::validateArray($this->protectedIpList);
        }
        if (\is_array($this->unprotectedIpList)) {
            Model::validateArray($this->unprotectedIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assocInfoStatus) {
            $res['AssocInfoStatus'] = $this->assocInfoStatus;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->protectedIpList) {
            if (\is_array($this->protectedIpList)) {
                $res['ProtectedIpList'] = [];
                $n1 = 0;
                foreach ($this->protectedIpList as $item1) {
                    $res['ProtectedIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unprotectedIpList) {
            if (\is_array($this->unprotectedIpList)) {
                $res['UnprotectedIpList'] = [];
                $n1 = 0;
                foreach ($this->unprotectedIpList as $item1) {
                    $res['UnprotectedIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
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
        if (isset($map['AssocInfoStatus'])) {
            $model->assocInfoStatus = $map['AssocInfoStatus'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['ProtectedIpList'])) {
            if (!empty($map['ProtectedIpList'])) {
                $model->protectedIpList = [];
                $n1 = 0;
                foreach ($map['ProtectedIpList'] as $item1) {
                    $model->protectedIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UnprotectedIpList'])) {
            if (!empty($map['UnprotectedIpList'])) {
                $model->unprotectedIpList = [];
                $n1 = 0;
                foreach ($map['UnprotectedIpList'] as $item1) {
                    $model->unprotectedIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
