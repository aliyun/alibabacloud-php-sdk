<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddInstallCodeRequest extends Model
{
    /**
     * @description The validity period of the installation command. The value is a 13-digit timestamp.
     *
     * >  The installation command is valid only within the validity period. An expired installation command cannot be used to install the Security Center agent.
     * @example 1680257463853
     *
     * @var int
     */
    public $expiredDate;

    /**
     * @description The ID of the asset group to which you want to add the asset.
     *
     * > You can call the [DescribeAllGroups](~~DescribeAllGroups~~) operation to query the IDs of asset groups.
     * @example 8076980
     *
     * @var int
     */
    public $groupId;

    /**
     * @description Specifies whether to create an image. Default value: **false**. Valid values:
     *
     *   **false**: does not create an image.
     *   **true**: creates an image.
     *
     * @example false
     *
     * @var bool
     */
    public $onlyImage;

    /**
     * @description The operating system of the instance. Default value: **linux**. Valid values:
     *
     *   **linux**
     *   **windows**
     *   **windows-2003**
     *
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The name of the proxy cluster.
     *
     * @example proxy_test
     *
     * @var string
     */
    public $proxyCluster;

    /**
     * @description The name of the service provider for the asset. Default value: **ALIYUN**.
     *
     * >  You can call the [DescribeVendorList](~~DescribeVendorList~~) operation to query the names of service providers.
     * @example ALIYUN
     *
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'expiredDate'  => 'ExpiredDate',
        'groupId'      => 'GroupId',
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
     * @return AddInstallCodeRequest
     */
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
        if (isset($map['ProxyCluster'])) {
            $model->proxyCluster = $map['ProxyCluster'];
        }
        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        return $model;
    }
}
