<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspResponseBody\isps;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspResponseBody\regions;
use AlibabaCloud\Tea\Model;

class DescribeDcdnRegionAndIspResponseBody extends Model
{
    /**
     * @var isps
     */
    public $isps;

    /**
     * @var regions
     */
    public $regions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isps'      => 'Isps',
        'regions'   => 'Regions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isps) {
            $res['Isps'] = null !== $this->isps ? $this->isps->toMap() : null;
        }
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
     * @return DescribeDcdnRegionAndIspResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Isps'])) {
            $model->isps = isps::fromMap($map['Isps']);
        }
        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
