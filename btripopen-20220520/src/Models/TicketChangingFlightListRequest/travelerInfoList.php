<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListRequest;

use AlibabaCloud\Dara\Model;

class travelerInfoList extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'arrCity' => 'arr_city',
        'depCity' => 'dep_city',
        'name' => 'name',
        'type' => 'type',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }

        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }

        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
