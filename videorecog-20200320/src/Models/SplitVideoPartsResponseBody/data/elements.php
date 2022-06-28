<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var float
     */
    public $beginTime;

    /**
     * @var float
     */
    public $endTime;

    /**
     * @var int
     */
    public $index;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'endTime'   => 'EndTime',
        'index'     => 'Index',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        return $model;
    }
}
