<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;

class DescribeLabReservationRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $labReservationId;
    protected $_name = [
        'accountId' => 'AccountId',
        'labReservationId' => 'LabReservationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
