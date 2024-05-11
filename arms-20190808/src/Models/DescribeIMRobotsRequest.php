<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeIMRobotsRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The chatbot IDs.
     *
     * @example 123
     *
     * @var string
     */
    public $robotIds;

    /**
     * @description The name of the IM chatbot.
     *
     * @example Chatbot name
     *
     * @var string
     */
    public $robotName;

    /**
     * @description The number of IM chatbots to return on each page.
     *
     * This parameter is required.
     * @example 20
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeIMRobotsRequest
     */
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
