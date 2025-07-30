<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup;

use AlibabaCloud\Tea\Model;

class timers extends Model
{
    /**
     * @var string
     */
    public $bindStatus;

    /**
     * @example t-asdzx0mbjhg***
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $timerStatus;
    protected $_name = [
        'bindStatus' => 'BindStatus',
        'id' => 'Id',
        'name' => 'Name',
        'timerStatus' => 'TimerStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindStatus) {
            $res['BindStatus'] = $this->bindStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->timerStatus) {
            $res['TimerStatus'] = $this->timerStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindStatus'])) {
            $model->bindStatus = $map['BindStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TimerStatus'])) {
            $model->timerStatus = $map['TimerStatus'];
        }

        return $model;
    }
}
