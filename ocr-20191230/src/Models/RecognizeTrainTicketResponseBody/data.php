<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTrainTicketResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $departureStation;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $seat;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'price'            => 'Price',
        'destination'      => 'Destination',
        'departureStation' => 'DepartureStation',
        'date'             => 'Date',
        'number'           => 'Number',
        'seat'             => 'Seat',
        'name'             => 'Name',
        'level'            => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->departureStation) {
            $res['DepartureStation'] = $this->departureStation;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->seat) {
            $res['Seat'] = $this->seat;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DepartureStation'])) {
            $model->departureStation = $map['DepartureStation'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Seat'])) {
            $model->seat = $map['Seat'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
