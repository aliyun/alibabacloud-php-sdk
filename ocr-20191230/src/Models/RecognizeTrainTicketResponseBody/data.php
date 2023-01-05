<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTrainTicketResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $departureStation;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $name;

    /**
     * @example G7350
     *
     * @var string
     */
    public $number;

    /**
     * @example 104.5
     *
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $seat;
    protected $_name = [
        'date'             => 'Date',
        'departureStation' => 'DepartureStation',
        'destination'      => 'Destination',
        'level'            => 'Level',
        'name'             => 'Name',
        'number'           => 'Number',
        'price'            => 'Price',
        'seat'             => 'Seat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->departureStation) {
            $res['DepartureStation'] = $this->departureStation;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->seat) {
            $res['Seat'] = $this->seat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['DepartureStation'])) {
            $model->departureStation = $map['DepartureStation'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['Seat'])) {
            $model->seat = $map['Seat'];
        }

        return $model;
    }
}
