<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListRequest;

use AlibabaCloud\Tea\Model;

class travelerInfoList extends Model
{
    /**
     * @example BJS
     *
     * @var string
     */
    public $arrCity;

    /**
     * @example HGH
     *
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $name;

    /**
     * @example ADULT
     *
     * @var string
     */
    public $type;

    /**
     * @example 23231
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'arrCity' => 'arr_city',
        'depCity' => 'dep_city',
        'name'    => 'name',
        'type'    => 'type',
        'userId'  => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return travelerInfoList
     */
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
