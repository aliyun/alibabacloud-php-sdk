<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\HandleSecurityEventsRequest\securityEvent;
use AlibabaCloud\Tea\Model;

class HandleSecurityEventsRequest extends Model
{
    /**
     * @description The operation to handle multiple alerts of the same type at a time.
     *
     * @example deal
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The return value from the operation to handle multiple alerts of the same type at a time.\
     * This parameter is required only if you set the OperationCode parameter to `kill_and_quara` or `block_ip`. This parameter is not required if you set the OperationCode parameter to other values.
     * @example {"expireTime":1578475919533}
     *
     * @var string
     */
    public $operationParams;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The alerts.
     *
     * @var securityEvent[]
     */
    public $securityEvent;
    protected $_name = [
        'operationCode'   => 'OperationCode',
        'operationParams' => 'OperationParams',
        'regionId'        => 'RegionId',
        'securityEvent'   => 'SecurityEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityEvent) {
            $res['SecurityEvent'] = [];
            if (null !== $this->securityEvent && \is_array($this->securityEvent)) {
                $n = 0;
                foreach ($this->securityEvent as $item) {
                    $res['SecurityEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HandleSecurityEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityEvent'])) {
            if (!empty($map['SecurityEvent'])) {
                $model->securityEvent = [];
                $n                    = 0;
                foreach ($map['SecurityEvent'] as $item) {
                    $model->securityEvent[$n++] = null !== $item ? securityEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
