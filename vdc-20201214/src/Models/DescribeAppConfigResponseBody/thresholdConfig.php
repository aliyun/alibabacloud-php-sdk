<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppConfigResponseBody;

use AlibabaCloud\Tea\Model;

class thresholdConfig extends Model
{
    /**
     * @description 入会慢时间阈值，单位毫秒
     *
     * @var int
     */
    public $joinSlowTime;
    protected $_name = [
        'joinSlowTime' => 'JoinSlowTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinSlowTime) {
            $res['JoinSlowTime'] = $this->joinSlowTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thresholdConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinSlowTime'])) {
            $model->joinSlowTime = $map['JoinSlowTime'];
        }

        return $model;
    }
}
