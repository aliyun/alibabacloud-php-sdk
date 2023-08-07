<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesResponseBody;

use AlibabaCloud\Tea\Model;

class egressRules extends Model
{
    /**
     * @description The ID of the outbound rule.
     *
     * @example tmr-j6cok23ugp53eeib5****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return egressRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
