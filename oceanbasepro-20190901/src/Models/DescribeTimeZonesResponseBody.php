<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTimeZonesResponseBody\timeZones;

class DescribeTimeZonesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var timeZones
     */
    public $timeZones;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeZones' => 'TimeZones',
    ];

    public function validate()
    {
        if (null !== $this->timeZones) {
            $this->timeZones->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timeZones) {
            $res['TimeZones'] = null !== $this->timeZones ? $this->timeZones->toArray($noStream) : $this->timeZones;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TimeZones'])) {
            $model->timeZones = timeZones::fromMap($map['TimeZones']);
        }

        return $model;
    }
}
