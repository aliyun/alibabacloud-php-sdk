<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class BatchGetHotelDetailRequest extends Model
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
     * @var string[]
     */
    public $standardHotelIds;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'language' => 'Language',
        'standardHotelIds' => 'StandardHotelIds',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (\is_array($this->standardHotelIds)) {
            Model::validateArray($this->standardHotelIds);
        }
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

        if (null !== $this->standardHotelIds) {
            if (\is_array($this->standardHotelIds)) {
                $res['StandardHotelIds'] = [];
                $n1 = 0;
                foreach ($this->standardHotelIds as $item1) {
                    $res['StandardHotelIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['StandardHotelIds'])) {
                $model->standardHotelIds = [];
                $n1 = 0;
                foreach ($map['StandardHotelIds'] as $item1) {
                    $model->standardHotelIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
