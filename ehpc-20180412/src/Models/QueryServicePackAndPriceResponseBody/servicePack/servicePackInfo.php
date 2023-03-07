<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\QueryServicePackAndPriceResponseBody\servicePack;

use AlibabaCloud\Tea\Model;

class servicePackInfo extends Model
{
    /**
     * @example 2000
     *
     * @var int
     */
    public $capacity;

    /**
     * @example 1612705988
     *
     * @var int
     */
    public $endTime;

    /**
     * @example EHPCBAG-cn-78v12vbme0****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 1610027588
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'capacity'     => 'Capacity',
        'endTime'      => 'EndTime',
        'instanceName' => 'InstanceName',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return servicePackInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
