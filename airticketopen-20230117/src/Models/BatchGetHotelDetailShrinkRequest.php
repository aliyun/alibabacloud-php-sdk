<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class BatchGetHotelDetailShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $accountNo;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $standardHotelIdsShrink;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'language' => 'Language',
        'standardHotelIdsShrink' => 'StandardHotelIds',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->standardHotelIdsShrink) {
            $res['StandardHotelIds'] = $this->standardHotelIdsShrink;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['StandardHotelIds'])) {
            $model->standardHotelIdsShrink = $map['StandardHotelIds'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
