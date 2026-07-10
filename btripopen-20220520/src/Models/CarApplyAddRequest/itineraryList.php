<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddRequest;

use AlibabaCloud\Dara\Model;

class itineraryList extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cityCodeSet;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $finishedDate;
    protected $_name = [
        'city' => 'city',
        'cityCodeSet' => 'city_code_set',
        'date' => 'date',
        'finishedDate' => 'finished_date',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }

        if (null !== $this->cityCodeSet) {
            $res['city_code_set'] = $this->cityCodeSet;
        }

        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->finishedDate) {
            $res['finished_date'] = $this->finishedDate;
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
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }

        if (isset($map['city_code_set'])) {
            $model->cityCodeSet = $map['city_code_set'];
        }

        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['finished_date'])) {
            $model->finishedDate = $map['finished_date'];
        }

        return $model;
    }
}
