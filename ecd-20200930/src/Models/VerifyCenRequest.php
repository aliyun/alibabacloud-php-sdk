<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class VerifyCenRequest extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-3gwy16dojz1m65****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the Alibaba Cloud account to which the CEN instance belongs.
     *
     *   If you specify the CenId parameter and the CEN instance that you specify for the CenId parameter belongs to the current Alibaba Cloud account, skip this parameter.
     *   If you specify the CenId parameter and the CEN instance that you specify for the CenId parameter belongs to another Alibaba Cloud account, enter the ID of the exact Alibaba Cloud account.
     *
     * @example 102681951715****
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @description The IPv4 CIDR block of the workspace.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The verification code. If the CEN instance that you specify for the CenId parameter belongs to another Alibaba Cloud account, you must call the SendVerifyCode operation to obtain the verification code.
     *
     * @example 12****
     *
     * @var string
     */
    public $verifyCode;
    protected $_name = [
        'cenId'      => 'CenId',
        'cenOwnerId' => 'CenOwnerId',
        'cidrBlock'  => 'CidrBlock',
        'regionId'   => 'RegionId',
        'verifyCode' => 'VerifyCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }

        return $model;
    }
}
