<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\HandleSecurityEventsRequest\securityEvent;
use AlibabaCloud\Tea\Model;

class HandleSecurityEventsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $operationCode;

    /**
     * @var string
     */
    public $operationParams;

    /**
     * @var securityEvent[]
     */
    public $securityEvent;
    protected $_name = [
        'regionId'        => 'RegionId',
        'operationCode'   => 'OperationCode',
        'operationParams' => 'OperationParams',
        'securityEvent'   => 'SecurityEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
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
