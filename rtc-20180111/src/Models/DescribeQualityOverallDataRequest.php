<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeQualityOverallDataRequest extends Model
{
    /**
     * @description APP ID
     *
     * @example 0rbd****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1615910399
     *
     * @var int
     */
    public $endDate;

    /**
     * @example 1615824000
     *
     * @var int
     */
    public $startDate;

    /**
     * @example JOIN_CHANNEL_SUC_RATE
     *
     * @var string
     */
    public $types;
    protected $_name = [
        'appId'     => 'AppId',
        'endDate'   => 'EndDate',
        'startDate' => 'StartDate',
        'types'     => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQualityOverallDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }

        return $model;
    }
}
