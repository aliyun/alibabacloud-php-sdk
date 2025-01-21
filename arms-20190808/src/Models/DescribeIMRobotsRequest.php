<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DescribeIMRobotsRequest extends Model
{
    /**
     * @var int
     */
    public $page;
    /**
     * @var string
     */
    public $robotIds;
    /**
     * @var string
     */
    public $robotName;
    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'page'      => 'Page',
        'robotIds'  => 'RobotIds',
        'robotName' => 'RobotName',
        'size'      => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->robotIds) {
            $res['RobotIds'] = $this->robotIds;
        }

        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['RobotIds'])) {
            $model->robotIds = $map['RobotIds'];
        }

        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
