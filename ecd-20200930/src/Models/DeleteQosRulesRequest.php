<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteQosRulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $qosRuleId;
    protected $_name = [
        'qosRuleId' => 'QosRuleId',
    ];

    public function validate()
    {
        if (\is_array($this->qosRuleId)) {
            Model::validateArray($this->qosRuleId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qosRuleId) {
            if (\is_array($this->qosRuleId)) {
                $res['QosRuleId'] = [];
                $n1 = 0;
                foreach ($this->qosRuleId as $item1) {
                    $res['QosRuleId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['QosRuleId'])) {
            if (!empty($map['QosRuleId'])) {
                $model->qosRuleId = [];
                $n1 = 0;
                foreach ($map['QosRuleId'] as $item1) {
                    $model->qosRuleId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
