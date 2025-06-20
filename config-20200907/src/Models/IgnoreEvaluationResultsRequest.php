<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreEvaluationResultsRequest\resources;

class IgnoreEvaluationResultsRequest extends Model
{
    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $ignoreDate;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'configRuleId' => 'ConfigRuleId',
        'ignoreDate' => 'IgnoreDate',
        'reason' => 'Reason',
        'resources' => 'Resources',
    ];

    public function validate()
    {
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }

        if (null !== $this->ignoreDate) {
            $res['IgnoreDate'] = $this->ignoreDate;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }

        if (isset($map['IgnoreDate'])) {
            $model->ignoreDate = $map['IgnoreDate'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1] = resources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
