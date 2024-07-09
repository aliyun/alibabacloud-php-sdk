<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SendVerifyCodeRequest extends Model
{
    /**
     * @description The information that is required to send the verification code, in JSON format. When you verify the CEN instance of another Alibaba Cloud account, you must provide the ID of the CEN instance and the ID of the Alibaba Cloud account to which the instance belongs.
     *
     *   CenId: the ID of the CEN instance.
     *   CenOwnerId: the ID of the Alibaba Cloud account to which the CEN instance belongs.
     *
     * >  If you own the CEN instance, skip this parameter. If you do not own the CEN instance, specify the ID of the Alibaba Cloud account that owns the CEN instance.
     * @example {"cenOwnerId": 1234567890******,"cenId": "cen-3weq30r6t0s7t4****"}
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The action that you want to perform by using the verification code.
     *
     * Valid value:
     *
     *   eds_cenID_securityverification: Use the verification code to verify the CEN instance.
     *
     * This parameter is required.
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
