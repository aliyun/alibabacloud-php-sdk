<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListChartDataForServiceGroupRequest extends Model
{
    /**
     * @description clientToken
     *
     * @example 23es23s32xas23
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 2021-10-09
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2021-09-09
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'clientToken' => 'clientToken',
        'endTime'     => 'endTime',
        'startTime'   => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChartDataForServiceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
