<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDTSIPRequest extends Model
{
    /**
     * @var string
     */
    public $destinationEndpointRegion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceEndpointRegion;
    protected $_name = [
        'destinationEndpointRegion' => 'DestinationEndpointRegion',
        'regionId'                  => 'RegionId',
        'sourceEndpointRegion'      => 'SourceEndpointRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationEndpointRegion) {
            $res['DestinationEndpointRegion'] = $this->destinationEndpointRegion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDTSIPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationEndpointRegion'])) {
            $model->destinationEndpointRegion = $map['DestinationEndpointRegion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }

        return $model;
    }
}
