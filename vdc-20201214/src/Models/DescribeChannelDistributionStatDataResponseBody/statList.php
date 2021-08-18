<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class statList extends Model
{
    /**
     * @description 统计维度。
     *
     * @var string
     */
    public $name;

    /**
     * @description 通信人数。
     *
     * @var int
     */
    public $callUserCount;

    /**
     * @description 通信人数占比，用小数表示，例如1.0000表示通信人数占比为100%。
     *
     * @var string
     */
    public $callUserRatio;
    protected $_name = [
        'name'          => 'Name',
        'callUserCount' => 'CallUserCount',
        'callUserRatio' => 'CallUserRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->callUserCount) {
            $res['CallUserCount'] = $this->callUserCount;
        }
        if (null !== $this->callUserRatio) {
            $res['CallUserRatio'] = $this->callUserRatio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CallUserCount'])) {
            $model->callUserCount = $map['CallUserCount'];
        }
        if (isset($map['CallUserRatio'])) {
            $model->callUserRatio = $map['CallUserRatio'];
        }

        return $model;
    }
}
