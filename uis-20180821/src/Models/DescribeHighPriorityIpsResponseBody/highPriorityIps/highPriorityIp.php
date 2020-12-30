<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeHighPriorityIpsResponseBody\highPriorityIps;

use AlibabaCloud\Tea\Model;

class highPriorityIp extends Model
{
    /**
     * @var string
     */
    public $areaId;

    /**
     * @var string
     */
    public $destination;
    protected $_name = [
        'areaId'      => 'AreaId',
        'destination' => 'Destination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return highPriorityIp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }

        return $model;
    }
}
