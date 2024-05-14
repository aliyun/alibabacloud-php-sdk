<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLabReservationRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $labReservationId;
    protected $_name = [
        'accountId'        => 'AccountId',
        'labReservationId' => 'LabReservationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->labReservationId) {
            $res['LabReservationId'] = $this->labReservationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLabReservationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['LabReservationId'])) {
            $model->labReservationId = $map['LabReservationId'];
        }

        return $model;
    }
}
