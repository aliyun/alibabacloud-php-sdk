<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList;

use AlibabaCloud\Tea\Model;

class airlineInfo extends Model
{
    /**
     * @example CA
     *
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
        'airlineCode'       => 'airline_code',
        'airlineName'       => 'airline_name',
        'airlineSimpleName' => 'airline_simple_name',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return airlineInfo
     */
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
