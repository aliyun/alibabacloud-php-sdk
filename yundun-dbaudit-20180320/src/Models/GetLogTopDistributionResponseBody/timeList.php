<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTopDistributionResponseBody;

use AlibabaCloud\Tea\Model;

class timeList extends Model
{
    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $topTime;
    protected $_name = [
        'beginDate' => 'BeginDate',
        'sqlCount'  => 'SqlCount',
        'endDate'   => 'EndDate',
        'topTime'   => 'TopTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->topTime) {
            $res['TopTime'] = $this->topTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['TopTime'])) {
            $model->topTime = $map['TopTime'];
        }

        return $model;
    }
}
