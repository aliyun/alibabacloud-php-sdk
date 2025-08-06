<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones;

class DescribeSpotAdviceResponseBody extends Model
{
    /**
     * @var availableSpotZones
     */
    public $availableSpotZones;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableSpotZones' => 'AvailableSpotZones',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->availableSpotZones) {
            $this->availableSpotZones->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableSpotZones) {
            $res['AvailableSpotZones'] = null !== $this->availableSpotZones ? $this->availableSpotZones->toArray($noStream) : $this->availableSpotZones;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AvailableSpotZones'])) {
            $model->availableSpotZones = availableSpotZones::fromMap($map['AvailableSpotZones']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
