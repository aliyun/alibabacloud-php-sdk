<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspResponseBody\isps;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspResponseBody\regions;
use AlibabaCloud\Tea\Model;

class DescribeDcdnRegionAndIspResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var regions
     */
    public $regions;

    /**
     * @var isps
     */
    public $isps;
    protected $_name = [
        'requestId' => 'RequestId',
        'regions'   => 'Regions',
        'isps'      => 'Isps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toMap() : null;
        }
        if (null !== $this->isps) {
            $res['Isps'] = null !== $this->isps ? $this->isps->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnRegionAndIspResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }
        if (isset($map['Isps'])) {
            $model->isps = isps::fromMap($map['Isps']);
        }

        return $model;
    }
}
