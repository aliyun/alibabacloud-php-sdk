<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicantContacterRequest extends Model
{
    /**
     * @var string
     */
    public $contactAddress;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactNumber;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var int
     */
    public $applicantId;

    /**
     * @var string
     */
    public $contactZipCode;

    /**
     * @var string
     */
    public $bizId;
    protected $_name = [
        'contactAddress' => 'ContactAddress',
        'contactName'    => 'ContactName',
        'contactNumber'  => 'ContactNumber',
        'contactEmail'   => 'ContactEmail',
        'applicantId'    => 'ApplicantId',
        'contactZipCode' => 'ContactZipCode',
        'bizId'          => 'BizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactAddress) {
            $res['ContactAddress'] = $this->contactAddress;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactNumber) {
            $res['ContactNumber'] = $this->contactNumber;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->applicantId) {
            $res['ApplicantId'] = $this->applicantId;
        }
        if (null !== $this->contactZipCode) {
            $res['ContactZipCode'] = $this->contactZipCode;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicantContacterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactAddress'])) {
            $model->contactAddress = $map['ContactAddress'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactNumber'])) {
            $model->contactNumber = $map['ContactNumber'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['ApplicantId'])) {
            $model->applicantId = $map['ApplicantId'];
        }
        if (isset($map['ContactZipCode'])) {
            $model->contactZipCode = $map['ContactZipCode'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        return $model;
    }
}
