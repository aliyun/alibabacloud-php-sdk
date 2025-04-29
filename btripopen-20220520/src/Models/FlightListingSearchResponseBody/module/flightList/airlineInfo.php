<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module\flightList;

use AlibabaCloud\Dara\Model;

class airlineInfo extends Model
{
    /**
     * @var string
     */
    public $airlineCode;

    /**
     * @var string
     */
    public $airlineName;

    /**
     * @var string
     */
    public $airlineSimpleName;
    protected $_name = [
        'airlineCode' => 'airline_code',
        'airlineName' => 'airline_name',
        'airlineSimpleName' => 'airline_simple_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }

        if (null !== $this->airlineName) {
            $res['airline_name'] = $this->airlineName;
        }

        if (null !== $this->airlineSimpleName) {
            $res['airline_simple_name'] = $this->airlineSimpleName;
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
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }

        if (isset($map['airline_name'])) {
            $model->airlineName = $map['airline_name'];
        }

        if (isset($map['airline_simple_name'])) {
            $model->airlineSimpleName = $map['airline_simple_name'];
        }

        return $model;
    }
}
