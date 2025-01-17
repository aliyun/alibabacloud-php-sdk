<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddInstallCodeRequest extends Model
{
    /**
     * @var int
     */
    public $expiredDate;
    /**
     * @var int
     */
    public $groupId;
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
    public $privateLinkId;
    /**
     * @var string
     */
    public $proxyCluster;
    /**
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'expiredDate'   => 'ExpiredDate',
        'groupId'       => 'GroupId',
        'onlyImage'     => 'OnlyImage',
        'os'            => 'Os',
        'privateLinkId' => 'PrivateLinkId',
        'proxyCluster'  => 'ProxyCluster',
        'vendorName'    => 'VendorName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiredDate) {
            $res['ExpiredDate'] = $this->expiredDate;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->onlyImage) {
            $res['OnlyImage'] = $this->onlyImage;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->privateLinkId) {
            $res['PrivateLinkId'] = $this->privateLinkId;
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
        if (isset($map['ExpiredDate'])) {
            $model->expiredDate = $map['ExpiredDate'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['OnlyImage'])) {
            $model->onlyImage = $map['OnlyImage'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['PrivateLinkId'])) {
            $model->privateLinkId = $map['PrivateLinkId'];
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
