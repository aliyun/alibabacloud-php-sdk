<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeChildInstanceRegionsResponseBody\regions;

class DescribeChildInstanceRegionsResponseBody extends Model
{
    /**
     * @var regions
     */
    public $regions;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regions'   => 'Regions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->regions) {
            $this->regions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toArray($noStream) : $this->regions;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
