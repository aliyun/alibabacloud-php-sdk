<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\SDK\Fnf\V20190315\Models\ListSchedulesResponseBody\schedules;
use AlibabaCloud\Tea\Model;

class ListSchedulesResponseBody extends Model
{
    /**
     * @var schedules[]
     */
    public $schedules;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'schedules' => 'Schedules',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedules) {
            $res['Schedules'] = [];
            if (null !== $this->schedules && \is_array($this->schedules)) {
                $n = 0;
                foreach ($this->schedules as $item) {
                    $res['Schedules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSchedulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Schedules'])) {
            if (!empty($map['Schedules'])) {
                $model->schedules = [];
                $n                = 0;
                foreach ($map['Schedules'] as $item) {
                    $model->schedules[$n++] = null !== $item ? schedules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
