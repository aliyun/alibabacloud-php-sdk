<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
