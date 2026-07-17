<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListInstancesQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class quotaValues extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $quotaValue;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'quotaValue' => 'QuotaValue',
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

        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
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

        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }

        return $model;
    }
}
