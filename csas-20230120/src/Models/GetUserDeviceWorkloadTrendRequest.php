<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class GetUserDeviceWorkloadTrendRequest extends Model
{
    /**
     * @var string
     */
    public $deviceTag;

    /**
     * @var int
     */
    public $from;

    /**
     * @var int
     */
    public $to;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'deviceTag' => 'DeviceTag',
        'from' => 'From',
        'to' => 'To',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceTag) {
            $res['DeviceTag'] = $this->deviceTag;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
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
        if (isset($map['DeviceTag'])) {
            $model->deviceTag = $map['DeviceTag'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
