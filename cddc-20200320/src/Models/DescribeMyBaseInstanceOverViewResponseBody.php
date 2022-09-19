<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions;
use AlibabaCloud\Tea\Model;

class DescribeMyBaseInstanceOverViewResponseBody extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMyBaseInstanceOverViewResponseBody
     */
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
