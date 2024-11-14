<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\railway;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\taxi;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\walking;
use AlibabaCloud\Tea\Model;

class segments extends Model
{
    /**
     * @var bus
     */
    public $bus;

    /**
     * @var railway
     */
    public $railway;

    /**
     * @var taxi
     */
    public $taxi;

    /**
     * @var walking
     */
    public $walking;
    protected $_name = [
        'bus'     => 'bus',
        'railway' => 'railway',
        'taxi'    => 'taxi',
        'walking' => 'walking',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bus) {
            $res['bus'] = null !== $this->bus ? $this->bus->toMap() : null;
        }
        if (null !== $this->railway) {
            $res['railway'] = null !== $this->railway ? $this->railway->toMap() : null;
        }
        if (null !== $this->taxi) {
            $res['taxi'] = null !== $this->taxi ? $this->taxi->toMap() : null;
        }
        if (null !== $this->walking) {
            $res['walking'] = null !== $this->walking ? $this->walking->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bus'])) {
            $model->bus = bus::fromMap($map['bus']);
        }
        if (isset($map['railway'])) {
            $model->railway = railway::fromMap($map['railway']);
        }
        if (isset($map['taxi'])) {
            $model->taxi = taxi::fromMap($map['taxi']);
        }
        if (isset($map['walking'])) {
            $model->walking = walking::fromMap($map['walking']);
        }

        return $model;
    }
}
