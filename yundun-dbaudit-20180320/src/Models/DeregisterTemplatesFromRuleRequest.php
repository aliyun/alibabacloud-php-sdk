<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class DeregisterTemplatesFromRuleRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $sentenceParam;
    protected $_name = [
        'regionId'      => 'RegionId',
        'instanceId'    => 'InstanceId',
        'sentenceParam' => 'SentenceParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sentenceParam) {
            $res['SentenceParam'] = $this->sentenceParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeregisterTemplatesFromRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SentenceParam'])) {
            $model->sentenceParam = $map['SentenceParam'];
        }

        return $model;
    }
}
