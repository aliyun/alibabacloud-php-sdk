<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\periods;

use AlibabaCloud\Dara\Model;

class bizDates extends Model
{
    /**
     * @var string
     */
    public $endBizDate;

    /**
     * @var string
     */
    public $startBizDate;
    protected $_name = [
        'endBizDate' => 'EndBizDate',
        'startBizDate' => 'StartBizDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
        }

        if (null !== $this->startBizDate) {
            $res['StartBizDate'] = $this->startBizDate;
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
        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
        }

        if (isset($map['StartBizDate'])) {
            $model->startBizDate = $map['StartBizDate'];
        }

        return $model;
    }
}
