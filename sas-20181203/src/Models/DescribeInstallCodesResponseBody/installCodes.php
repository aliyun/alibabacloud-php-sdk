<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCodesResponseBody;

use AlibabaCloud\Tea\Model;

class installCodes extends Model
{
    /**
     * @description The installation verification code for you to manually install the Security Center agent.
     *
     * @example 15v02r
     *
     * @var string
     */
    public $captchaCode;

    /**
     * @description The timestamp when the installation command expires. Unit: milliseconds.
     *
     * @example 1637810007000
     *
     * @var int
     */
    public $expiredDate;

    /**
     * @description The ID of the server group to which the server belongs.
     *
     * @example 9165712
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the server group to which the server belongs.
     *
     * @example default
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Indicates whether an image is used to install the Security Center agent. Valid values:
     *
     *   **true**: An image is used to install the Security Center agent.
     *   **false**: An image is not used to install the Security Center agent.
     *
     * @example false
     *
     * @var bool
     */
    public $onlyImage;

    /**
     * @description The operating system of the server. Valid values:
     *   **linux**: Linux.
     *   **windows**: Windows.
     *
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @example proxy_test
     *
     * @var string
     */
    public $proxyCluster;

    /**
     * @description The name of the server provider.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'captchaCode'  => 'CaptchaCode',
        'expiredDate'  => 'ExpiredDate',
        'groupId'      => 'GroupId',
        'groupName'    => 'GroupName',
        'onlyImage'    => 'OnlyImage',
        'os'           => 'Os',
        'proxyCluster' => 'ProxyCluster',
        'vendorName'   => 'VendorName',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->onlyImage) {
            $res['OnlyImage'] = $this->onlyImage;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->proxyCluster) {
            $res['ProxyCluster'] = $this->proxyCluster;
        }
        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return installCodes
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
        if (isset($map['OnlyImage'])) {
            $model->onlyImage = $map['OnlyImage'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['ProxyCluster'])) {
            $model->proxyCluster = $map['ProxyCluster'];
        }
        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        return $model;
    }
}
