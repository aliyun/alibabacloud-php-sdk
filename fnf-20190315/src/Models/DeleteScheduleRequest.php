<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class DeleteScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $flowName;
    /**
     * @var string
     */
    public $scheduleName;
    protected $_name = [
        'flowName'     => 'FlowName',
        'scheduleName' => 'ScheduleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->scheduleName) {
            $res['ScheduleName'] = $this->scheduleName;
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
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }

        return $model;
    }
}
