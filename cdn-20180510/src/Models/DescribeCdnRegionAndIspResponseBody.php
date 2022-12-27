<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspResponseBody\isps;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspResponseBody\regions;
use AlibabaCloud\Tea\Model;

class DescribeCdnRegionAndIspResponseBody extends Model
{
    /**
     * @description A list of ISPs.
     *
     * @var isps
     */
    public $isps;

    /**
     * @description A list of regions.
     *
     * @var regions
     */
    public $regions;

    /**
     * @description The ID of the request.
     *
     * @example 2387C335-932C-4E1E-862C-1C4363B6DE72
     *
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
     * @return DescribeCdnRegionAndIspResponseBody
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
