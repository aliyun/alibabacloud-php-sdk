<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddInstallCodeRequest extends Model
{
    /**
     * @description 6134
     *
     * @example 1680257463853
     *
     * @var int
     */
    public $expiredDate;

    /**
     * @description Specifies whether to create an image. Default value: **false**. Valid values:
     *
     *   **false**: does not create an image.
     *   **true**: creates an image.
     *
     * @example 8076980
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The operating system of the instance. Default value: **linux**. Valid values:
     *
     *   **linux**
     *   **windows**
     *   **windows-2003**
     *
     * @example false
     *
     * @var bool
     */
    public $onlyImage;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The ID of the asset group to which the you want to add the asset.
     *
     * >  You can call the [DescribeAllGroups](~~describeallgroups~~) operation to query the IDs of asset groups.
     * @example ALIYUN
     *
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'expiredDate' => 'ExpiredDate',
        'groupId'     => 'GroupId',
        'onlyImage'   => 'OnlyImage',
        'os'          => 'Os',
        'vendorName'  => 'VendorName',
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
        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        return $model;
    }
}
