<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GisSearchDeviceTraceResponseBody\data;

use AlibabaCloud\Tea\Model;

class points extends Model
{
    /**
     * @var int
     */
    public $locateTime;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'locateTime' => 'LocateTime',
        'location'   => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locateTime) {
            $res['LocateTime'] = $this->locateTime;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return points
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocateTime'])) {
            $model->locateTime = $map['LocateTime'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
