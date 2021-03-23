<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOfflineMessagesResponseBody\offlineMessages;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $mid;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $expiredTime;
    protected $_name = [
        'mid'         => 'Mid',
        'gmtCreate'   => 'GmtCreate',
        'expiredTime' => 'ExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        return $model;
    }
}
