<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models;

use AlibabaCloud\Dara\Model;

class CreateComputeInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $paidType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'paidType' => 'PaidType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paidType) {
            $res['PaidType'] = $this->paidType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['PaidType'])) {
            $model->paidType = $map['PaidType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
