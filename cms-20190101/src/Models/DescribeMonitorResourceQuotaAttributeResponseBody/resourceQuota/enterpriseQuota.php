<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;

use AlibabaCloud\Dara\Model;

class enterpriseQuota extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $suitInfo;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'suitInfo' => 'SuitInfo',
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

        if (null !== $this->suitInfo) {
            $res['SuitInfo'] = $this->suitInfo;
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

        if (isset($map['SuitInfo'])) {
            $model->suitInfo = $map['SuitInfo'];
        }

        return $model;
    }
}
