<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation;

class GetScheduleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var scheduleInformation[]
     */
    public $scheduleInformation;
    /**
     * @var string
     */
    public $vendorRequestId;
    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'requestId'           => 'requestId',
        'scheduleInformation' => 'scheduleInformation',
        'vendorRequestId'     => 'vendorRequestId',
        'vendorType'          => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->scheduleInformation)) {
            Model::validateArray($this->scheduleInformation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scheduleInformation) {
            if (\is_array($this->scheduleInformation)) {
                $res['scheduleInformation'] = [];
                $n1                         = 0;
                foreach ($this->scheduleInformation as $item1) {
                    $res['scheduleInformation'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scheduleInformation'])) {
            if (!empty($map['scheduleInformation'])) {
                $model->scheduleInformation = [];
                $n1                         = 0;
                foreach ($map['scheduleInformation'] as $item1) {
                    $model->scheduleInformation[$n1++] = scheduleInformation::fromMap($item1);
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
