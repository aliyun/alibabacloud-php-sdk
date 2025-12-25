<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAlarmListResponseBody\alarms;

class DescribeAlarmListResponseBody extends Model
{
    /**
     * @var alarms[]
     */
    public $alarms;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alarms' => 'Alarms',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->alarms)) {
            Model::validateArray($this->alarms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarms) {
            if (\is_array($this->alarms)) {
                $res['Alarms'] = [];
                $n1 = 0;
                foreach ($this->alarms as $item1) {
                    $res['Alarms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Alarms'])) {
            if (!empty($map['Alarms'])) {
                $model->alarms = [];
                $n1 = 0;
                foreach ($map['Alarms'] as $item1) {
                    $model->alarms[$n1] = alarms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
