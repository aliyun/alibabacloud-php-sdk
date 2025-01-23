<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CheckResourceStockRequest extends Model
{
    /**
     * @var string
     */
    public $acpSpecId;
    /**
     * @var int
     */
    public $amount;
    /**
     * @var string
     */
    public $bizRegionId;
    /**
     * @var bool
     */
    public $gpuAcceleration;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'acpSpecId'       => 'AcpSpecId',
        'amount'          => 'Amount',
        'bizRegionId'     => 'BizRegionId',
        'gpuAcceleration' => 'GpuAcceleration',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acpSpecId) {
            $res['AcpSpecId'] = $this->acpSpecId;
        }

        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->gpuAcceleration) {
            $res['GpuAcceleration'] = $this->gpuAcceleration;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AcpSpecId'])) {
            $model->acpSpecId = $map['AcpSpecId'];
        }

        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['GpuAcceleration'])) {
            $model->gpuAcceleration = $map['GpuAcceleration'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
