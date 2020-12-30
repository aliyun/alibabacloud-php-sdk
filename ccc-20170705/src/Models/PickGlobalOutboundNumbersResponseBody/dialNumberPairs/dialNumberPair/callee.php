<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\PickGlobalOutboundNumbersResponseBody\dialNumberPairs\dialNumberPair;

use AlibabaCloud\Tea\Model;

class callee extends Model
{
    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'number'   => 'Number',
        'city'     => 'City',
        'province' => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callee
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
