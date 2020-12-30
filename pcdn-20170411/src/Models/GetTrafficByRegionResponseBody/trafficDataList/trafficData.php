<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficByRegionResponseBody\trafficDataList;

use AlibabaCloud\Tea\Model;

class trafficData extends Model
{
    /**
     * @var int
     */
    public $traffic;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'traffic' => 'Traffic',
        'name'    => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
