<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCodesResponseBody;

use AlibabaCloud\Dara\Model;

class installCodes extends Model
{
    /**
     * @var string
     */
    public $captchaCode;

    /**
     * @var int
     */
    public $expiredDate;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $onlyImage;

    /**
     * @var string
     */
    public $os;

    /**
     * @var int
     */
    public $privateLinkEndpointId;

    /**
     * @var string
     */
    public $proxyCluster;

    /**
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'captchaCode' => 'CaptchaCode',
        'expiredDate' => 'ExpiredDate',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'onlyImage' => 'OnlyImage',
        'os' => 'Os',
        'privateLinkEndpointId' => 'PrivateLinkEndpointId',
        'proxyCluster' => 'ProxyCluster',
        'vendorName' => 'VendorName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->privateLinkEndpointId) {
            $res['PrivateLinkEndpointId'] = $this->privateLinkEndpointId;
        }

        if (null !== $this->proxyCluster) {
            $res['ProxyCluster'] = $this->proxyCluster;
        }

        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
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

        if (isset($map['PrivateLinkEndpointId'])) {
            $model->privateLinkEndpointId = $map['PrivateLinkEndpointId'];
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
