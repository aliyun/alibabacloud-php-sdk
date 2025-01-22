<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateRouteRequest extends Model
{
    /**
     * @var string
     */
    public $destinationCidr;
    /**
     * @var int
     */
    public $networkId;
    protected $_name = [
        'destinationCidr' => 'DestinationCidr',
        'networkId'       => 'NetworkId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationCidr) {
            $res['DestinationCidr'] = $this->destinationCidr;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
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
        if (isset($map['DestinationCidr'])) {
            $model->destinationCidr = $map['DestinationCidr'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        return $model;
    }
}
