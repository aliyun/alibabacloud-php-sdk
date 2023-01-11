<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetPhoneNumberVerificationStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example VERIFIED
     *
     * @var string
     */
    public $codeVerificationStatus;

    /**
     * @example 2224342624
     *
     * @var string
     */
    public $id;

    /**
     * @example 861380000
     *
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'codeVerificationStatus' => 'CodeVerificationStatus',
        'id'                     => 'Id',
        'phoneNumber'            => 'PhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeVerificationStatus) {
            $res['CodeVerificationStatus'] = $this->codeVerificationStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeVerificationStatus'])) {
            $model->codeVerificationStatus = $map['CodeVerificationStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        return $model;
    }
}
