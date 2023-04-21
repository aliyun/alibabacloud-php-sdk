<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SendVerifyCodeRequest extends Model
{
    /**
     * @description The information in JSON format that is required for sending the verification code. To verify the security of CEN, you must provide the ID of the CEN instance and the ID of the Alibaba Cloud account to which the instance belongs.
     *
     *   CenId: the ID of the CEN instance
     *   CenOwnerId: the ID of the Alibaba Cloud account to which the CEN instance belongs.
     *
     * Note: If you specify the CenId parameter and the CEN instance that you specify for the CenId parameter belongs to the Alibaba Cloud account, skip this parameter. If you specify the CenId parameter and the CEN instance that you specify for the CenId parameter belongs to another Alibaba Cloud account, enter the ID of the exact Alibaba Cloud account. Example: {"cenOwnerId": 1234567890\*\*\*\*\*\*,"cenId": "cen-3weq30r6t0s7t4\*\*\*\*"}.
     * @example {"cenOwnerId": 1234567890******,"cenId": "cen-3weq30r6t0s7t4****"}
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The action that indicates what the verification code is used for. The parameter is only used to verify the security of CEN. Valid value: eds_cenID_securityverification.
     *
     * @example eds_cenID_securityverification
     *
     * @var string
     */
    public $verifyCodeAction;
    protected $_name = [
        'extraInfo'        => 'ExtraInfo',
        'regionId'         => 'RegionId',
        'verifyCodeAction' => 'VerifyCodeAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->verifyCodeAction) {
            $res['VerifyCodeAction'] = $this->verifyCodeAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendVerifyCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VerifyCodeAction'])) {
            $model->verifyCodeAction = $map['VerifyCodeAction'];
        }

        return $model;
    }
}
