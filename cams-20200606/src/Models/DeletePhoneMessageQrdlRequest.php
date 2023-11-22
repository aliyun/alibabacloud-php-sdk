<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class DeletePhoneMessageQrdlRequest extends Model
{
    /**
     * @example 883873773
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 861380000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 29338838
     *
     * @var string
     */
    public $qrdlCode;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'phoneNumber' => 'PhoneNumber',
        'qrdlCode'    => 'QrdlCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->qrdlCode) {
            $res['QrdlCode'] = $this->qrdlCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePhoneMessageQrdlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['QrdlCode'])) {
            $model->qrdlCode = $map['QrdlCode'];
        }

        return $model;
    }
}
