<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionDistributionResponseBody;

use AlibabaCloud\Dara\Model;

class timeList extends Model
{
    /**
     * @var int
     */
    public $activeSessionCount;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $errorSessionCount;

    /**
     * @var int
     */
    public $loginSessionCount;
    protected $_name = [
        'activeSessionCount' => 'ActiveSessionCount',
        'beginDate' => 'BeginDate',
        'endDate' => 'EndDate',
        'errorSessionCount' => 'ErrorSessionCount',
        'loginSessionCount' => 'LoginSessionCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeSessionCount) {
            $res['ActiveSessionCount'] = $this->activeSessionCount;
        }

        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->errorSessionCount) {
            $res['ErrorSessionCount'] = $this->errorSessionCount;
        }

        if (null !== $this->loginSessionCount) {
            $res['LoginSessionCount'] = $this->loginSessionCount;
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
        if (isset($map['ActiveSessionCount'])) {
            $model->activeSessionCount = $map['ActiveSessionCount'];
        }

        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ErrorSessionCount'])) {
            $model->errorSessionCount = $map['ErrorSessionCount'];
        }

        if (isset($map['LoginSessionCount'])) {
            $model->loginSessionCount = $map['LoginSessionCount'];
        }

        return $model;
    }
}
