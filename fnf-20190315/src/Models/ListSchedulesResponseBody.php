<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListSchedulesResponseBody\schedules;

class ListSchedulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var schedules[]
     */
    public $schedules;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'schedules' => 'Schedules',
    ];

    public function validate()
    {
        if (\is_array($this->schedules)) {
            Model::validateArray($this->schedules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->schedules) {
            if (\is_array($this->schedules)) {
                $res['Schedules'] = [];
                $n1 = 0;
                foreach ($this->schedules as $item1) {
                    $res['Schedules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Schedules'])) {
            if (!empty($map['Schedules'])) {
                $model->schedules = [];
                $n1 = 0;
                foreach ($map['Schedules'] as $item1) {
                    $model->schedules[$n1] = schedules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
