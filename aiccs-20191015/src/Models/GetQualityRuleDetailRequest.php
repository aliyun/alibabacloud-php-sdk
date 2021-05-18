<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetQualityRuleDetailRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $qualityRuleId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'qualityRuleId' => 'QualityRuleId',
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
        if (null !== $this->qualityRuleId) {
            $res['QualityRuleId'] = $this->qualityRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQualityRuleDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QualityRuleId'])) {
            $model->qualityRuleId = $map['QualityRuleId'];
        }

        return $model;
    }
}
