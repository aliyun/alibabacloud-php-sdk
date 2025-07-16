<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation;
use AlibabaCloud\Tea\Model;

class GetScheduleResponseBody extends Model
{
    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scheduleInformation[]
     */
    public $scheduleInformation;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'requestId' => 'requestId',
        'scheduleInformation' => 'scheduleInformation',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->scheduleInformation) {
            $res['scheduleInformation'] = [];
            if (null !== $this->scheduleInformation && \is_array($this->scheduleInformation)) {
                $n = 0;
                foreach ($this->scheduleInformation as $item) {
                    $res['scheduleInformation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScheduleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['scheduleInformation'])) {
            if (!empty($map['scheduleInformation'])) {
                $model->scheduleInformation = [];
                $n = 0;
                foreach ($map['scheduleInformation'] as $item) {
                    $model->scheduleInformation[$n++] = null !== $item ? scheduleInformation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
