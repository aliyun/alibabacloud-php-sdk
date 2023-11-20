<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models\SingleSendMailV2Request;

use AlibabaCloud\Tea\Model;

class htmlBodyPlaceHolders extends Model
{
    /**
     * @var string[]
     */
    public $placeHolders;

    /**
     * @var string
     */
    public $toAddress;
    protected $_name = [
        'placeHolders' => 'PlaceHolders',
        'toAddress'    => 'ToAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->placeHolders) {
            $res['PlaceHolders'] = $this->placeHolders;
        }
        if (null !== $this->toAddress) {
            $res['ToAddress'] = $this->toAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return htmlBodyPlaceHolders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlaceHolders'])) {
            $model->placeHolders = $map['PlaceHolders'];
        }
        if (isset($map['ToAddress'])) {
            $model->toAddress = $map['ToAddress'];
        }

        return $model;
    }
}
