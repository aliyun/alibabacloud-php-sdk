<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelDistributionStatDataResponseBody;

use AlibabaCloud\Dara\Model;

class statList extends Model
{
    /**
     * @var int
     */
    public $callUserCount;
    /**
     * @var string
     */
    public $callUserRatio;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'callUserCount' => 'CallUserCount',
        'callUserRatio' => 'CallUserRatio',
        'name'          => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callUserCount) {
            $res['CallUserCount'] = $this->callUserCount;
        }

        if (null !== $this->callUserRatio) {
            $res['CallUserRatio'] = $this->callUserRatio;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CallUserCount'])) {
            $model->callUserCount = $map['CallUserCount'];
        }

        if (isset($map['CallUserRatio'])) {
            $model->callUserRatio = $map['CallUserRatio'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
