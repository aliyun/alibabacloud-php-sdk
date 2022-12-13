<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionResponseBody\data\notifyStrategyList\strategies;

use AlibabaCloud\Tea\Model;

class periodChannel extends Model
{
    /**
     * @example DINGDING
     *
     * @var string
     */
    public $nonWorkday;

    /**
     * @example DINGDING
     *
     * @var string
     */
    public $workday;
    protected $_name = [
        'nonWorkday' => 'nonWorkday',
        'workday'    => 'workday',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonWorkday) {
            $res['nonWorkday'] = $this->nonWorkday;
        }
        if (null !== $this->workday) {
            $res['workday'] = $this->workday;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return periodChannel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nonWorkday'])) {
            $model->nonWorkday = $map['nonWorkday'];
        }
        if (isset($map['workday'])) {
            $model->workday = $map['workday'];
        }

        return $model;
    }
}
