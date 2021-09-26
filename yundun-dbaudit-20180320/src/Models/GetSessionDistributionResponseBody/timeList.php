<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionDistributionResponseBody;

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
    public $loginSessionCount;

    /**
     * @var int
     */
    public $activeSessionCount;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $errorSessionCount;
    protected $_name = [
        'beginDate'          => 'BeginDate',
        'loginSessionCount'  => 'LoginSessionCount',
        'activeSessionCount' => 'ActiveSessionCount',
        'endDate'            => 'EndDate',
        'errorSessionCount'  => 'ErrorSessionCount',
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
        if (null !== $this->loginSessionCount) {
            $res['LoginSessionCount'] = $this->loginSessionCount;
        }
        if (null !== $this->activeSessionCount) {
            $res['ActiveSessionCount'] = $this->activeSessionCount;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->errorSessionCount) {
            $res['ErrorSessionCount'] = $this->errorSessionCount;
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
        if (isset($map['LoginSessionCount'])) {
            $model->loginSessionCount = $map['LoginSessionCount'];
        }
        if (isset($map['ActiveSessionCount'])) {
            $model->activeSessionCount = $map['ActiveSessionCount'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ErrorSessionCount'])) {
            $model->errorSessionCount = $map['ErrorSessionCount'];
        }

        return $model;
    }
}
