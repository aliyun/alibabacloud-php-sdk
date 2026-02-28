<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GisSearchDeviceTraceResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        'location' => 'Location',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
