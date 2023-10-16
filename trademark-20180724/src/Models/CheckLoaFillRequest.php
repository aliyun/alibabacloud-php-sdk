<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CheckLoaFillRequest extends Model
{
    /**
     * @var string
     */
    public $applicantType;

    /**
     * @var string
     */
    public $bizType;

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
    public $contactZipcode;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $personalType;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $wtrName;
    protected $_name = [
        'applicantType'  => 'ApplicantType',
        'bizType'        => 'BizType',
        'contactName'    => 'ContactName',
        'contactNumber'  => 'ContactNumber',
        'contactZipcode' => 'ContactZipcode',
        'ossKey'         => 'OssKey',
        'personalType'   => 'PersonalType',
        'principalName'  => 'PrincipalName',
        'type'           => 'Type',
        'wtrName'        => 'WtrName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicantType) {
            $res['ApplicantType'] = $this->applicantType;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactNumber) {
            $res['ContactNumber'] = $this->contactNumber;
        }
        if (null !== $this->contactZipcode) {
            $res['ContactZipcode'] = $this->contactZipcode;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->personalType) {
            $res['PersonalType'] = $this->personalType;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->wtrName) {
            $res['WtrName'] = $this->wtrName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckLoaFillRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicantType'])) {
            $model->applicantType = $map['ApplicantType'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactNumber'])) {
            $model->contactNumber = $map['ContactNumber'];
        }
        if (isset($map['ContactZipcode'])) {
            $model->contactZipcode = $map['ContactZipcode'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['PersonalType'])) {
            $model->personalType = $map['PersonalType'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WtrName'])) {
            $model->wtrName = $map['WtrName'];
        }

        return $model;
    }
}
