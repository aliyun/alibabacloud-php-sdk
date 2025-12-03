<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Dara\Model;

class ActivateLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $licenseCode;

    /**
     * @var string
     */
    public $licenseNo;

    /**
     * @var string
     */
    public $licensePublisher;
    protected $_name = [
        'bizId' => 'BizId',
        'bizType' => 'BizType',
        'licenseCode' => 'LicenseCode',
        'licenseNo' => 'LicenseNo',
        'licensePublisher' => 'LicensePublisher',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }

        if (null !== $this->licenseNo) {
            $res['LicenseNo'] = $this->licenseNo;
        }

        if (null !== $this->licensePublisher) {
            $res['LicensePublisher'] = $this->licensePublisher;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }

        if (isset($map['LicenseNo'])) {
            $model->licenseNo = $map['LicenseNo'];
        }

        if (isset($map['LicensePublisher'])) {
            $model->licensePublisher = $map['LicensePublisher'];
        }

        return $model;
    }
}
