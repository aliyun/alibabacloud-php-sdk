<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class EstimatedPriceQueryV2Request extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $departDate;

    /**
     * @var string
     */
    public $fromCity;

    /**
     * @var string
     */
    public $leaveDate;

    /**
     * @var string
     */
    public $toCity;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizType' => 'biz_type',
        'departDate' => 'depart_date',
        'fromCity' => 'from_city',
        'leaveDate' => 'leave_date',
        'toCity' => 'to_city',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }

        if (null !== $this->departDate) {
            $res['depart_date'] = $this->departDate;
        }

        if (null !== $this->fromCity) {
            $res['from_city'] = $this->fromCity;
        }

        if (null !== $this->leaveDate) {
            $res['leave_date'] = $this->leaveDate;
        }

        if (null !== $this->toCity) {
            $res['to_city'] = $this->toCity;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['biz_type'])) {
            $model->bizType = $map['biz_type'];
        }

        if (isset($map['depart_date'])) {
            $model->departDate = $map['depart_date'];
        }

        if (isset($map['from_city'])) {
            $model->fromCity = $map['from_city'];
        }

        if (isset($map['leave_date'])) {
            $model->leaveDate = $map['leave_date'];
        }

        if (isset($map['to_city'])) {
            $model->toCity = $map['to_city'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
