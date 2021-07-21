<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;

use AlibabaCloud\Tea\Model;

class enterpriseQuota extends Model
{
    /**
     * @var string
     */
    public $suitInfo;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'suitInfo'   => 'SuitInfo',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suitInfo) {
            $res['SuitInfo'] = $this->suitInfo;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enterpriseQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuitInfo'])) {
            $model->suitInfo = $map['SuitInfo'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
