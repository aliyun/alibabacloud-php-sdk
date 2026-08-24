<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVulScanTasksResponseBody\tasks;

use AlibabaCloud\Dara\Model;

class targetDeviceCount extends Model
{
    /**
     * @var int
     */
    public $ackCount;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var int
     */
    public $startCount;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'ackCount' => 'AckCount',
        'failCount' => 'FailCount',
        'startCount' => 'StartCount',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackCount) {
            $res['AckCount'] = $this->ackCount;
        }

        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->startCount) {
            $res['StartCount'] = $this->startCount;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
        if (isset($map['AckCount'])) {
            $model->ackCount = $map['AckCount'];
        }

        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['StartCount'])) {
            $model->startCount = $map['StartCount'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
