<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class ActivateLicenseRequest extends Model
{
    /**
     * @example P20211118170645000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @description This parameter is required.
     *
     * @example esp.bookkeeping_course
     *
     * @var string
     */
    public $bizType;

    /**
     * @description This parameter is required.
     *
     * @example B09YICKLVHNR7ZQR
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @var string
     */
    public $licenseNo;

    /**
     * @description This parameter is required.
     *
     * @example yunMarket
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ActivateLicenseRequest
     */
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
