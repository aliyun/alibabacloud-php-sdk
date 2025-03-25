<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaScheduleRequest\body;
use AlibabaCloud\Tea\Model;

class UpdateComputeQuotaScheduleRequest extends Model
{
    /**
     * @description The request body parameters.
     *
     * @var body[]
     */
    public $body;

    /**
     * @var string
     */
    public $scheduleTimezone;
    protected $_name = [
        'body' => 'body',
        'scheduleTimezone' => 'scheduleTimezone',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = [];
            if (null !== $this->body && \is_array($this->body)) {
                $n = 0;
                foreach ($this->body as $item) {
                    $res['body'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scheduleTimezone) {
            $res['scheduleTimezone'] = $this->scheduleTimezone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateComputeQuotaScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n = 0;
                foreach ($map['body'] as $item) {
                    $model->body[$n++] = null !== $item ? body::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['scheduleTimezone'])) {
            $model->scheduleTimezone = $map['scheduleTimezone'];
        }

        return $model;
    }
}
