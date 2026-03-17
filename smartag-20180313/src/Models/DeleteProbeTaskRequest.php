<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class DeleteProbeTaskRequest extends Model
{
    /**
     * @var string
     */
    public $probeTaskId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sagId;

    /**
     * @var string
     */
    public $sn;
    protected $_name = [
        'probeTaskId' => 'ProbeTaskId',
        'regionId' => 'RegionId',
        'sagId' => 'SagId',
        'sn' => 'Sn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->probeTaskId) {
            $res['ProbeTaskId'] = $this->probeTaskId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sagId) {
            $res['SagId'] = $this->sagId;
        }

        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
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
        if (isset($map['ProbeTaskId'])) {
            $model->probeTaskId = $map['ProbeTaskId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SagId'])) {
            $model->sagId = $map['SagId'];
        }

        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}
