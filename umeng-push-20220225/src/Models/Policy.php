<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class Policy extends Model
{
    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $outerBizNo;

    /**
     * @example 5000
     *
     * @var int
     */
    public $speed;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'expireTime' => 'expireTime',
        'outerBizNo' => 'outerBizNo',
        'speed'      => 'speed',
        'startTime'  => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }
        if (null !== $this->outerBizNo) {
            $res['outerBizNo'] = $this->outerBizNo;
        }
        if (null !== $this->speed) {
            $res['speed'] = $this->speed;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }
        if (isset($map['outerBizNo'])) {
            $model->outerBizNo = $map['outerBizNo'];
        }
        if (isset($map['speed'])) {
            $model->speed = $map['speed'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
