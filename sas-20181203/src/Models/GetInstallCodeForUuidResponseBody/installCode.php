<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInstallCodeForUuidResponseBody;

use AlibabaCloud\Tea\Model;

class installCode extends Model
{
    /**
     * @description Installation verification code for manually installing the Cloud Security Center client.
     *
     * @example AK1W**
     *
     * @var string
     */
    public $captchaCode;

    /**
     * @description Expiration date of the installation verification code. The format is a 13-digit timestamp.
     * > The installation verification code can only be used within its validity period. Expired codes cannot be used.
     *
     * @example 1723860871689
     *
     * @var int
     */
    public $expiredDate;

    /**
     * @description Server group ID.
     *
     * @example 342710
     *
     * @var int
     */
    public $groupId;

    /**
     * @description Server group name.
     *
     * @example TestGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Operating system of the server. Values:
     *
     * - **linux**: Linux
     *
     * - **windows**: Windows
     *
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @description Name of the server vendor.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'captchaCode' => 'CaptchaCode',
        'expiredDate' => 'ExpiredDate',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'os' => 'Os',
        'vendorName' => 'VendorName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->captchaCode) {
            $res['CaptchaCode'] = $this->captchaCode;
        }
        if (null !== $this->expiredDate) {
            $res['ExpiredDate'] = $this->expiredDate;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return installCode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaptchaCode'])) {
            $model->captchaCode = $map['CaptchaCode'];
        }
        if (isset($map['ExpiredDate'])) {
            $model->expiredDate = $map['ExpiredDate'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        return $model;
    }
}
