<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DescribeCacheReservePriceGapRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $targetQuotaGb;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'targetQuotaGb' => 'TargetQuotaGb',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->targetQuotaGb) {
            $res['TargetQuotaGb'] = $this->targetQuotaGb;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TargetQuotaGb'])) {
            $model->targetQuotaGb = $map['TargetQuotaGb'];
        }

        return $model;
    }
}
