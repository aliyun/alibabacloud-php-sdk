<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoResponseBody;

use AlibabaCloud\Dara\Model;

class securityPhoneDevice extends Model
{
    /**
     * @var string
     */
    public $areaCode;
    /**
     * @var string
     */
    public $phoneNumber;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'areaCode'    => 'AreaCode',
        'phoneNumber' => 'PhoneNumber',
        'status'      => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
