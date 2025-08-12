<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAIStudioResponseBody\studioConfigs\subtitleConfig;

use AlibabaCloud\Dara\Model;

class ruleIds extends Model
{
    /**
     * @var string[]
     */
    public $ruleId;
    protected $_name = [
        'ruleId' => 'ruleId',
    ];

    public function validate()
    {
        if (\is_array($this->ruleId)) {
            Model::validateArray($this->ruleId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleId) {
            if (\is_array($this->ruleId)) {
                $res['ruleId'] = [];
                $n1 = 0;
                foreach ($this->ruleId as $item1) {
                    $res['ruleId'][$n1] = $item1;
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
        if (isset($map['ruleId'])) {
            if (!empty($map['ruleId'])) {
                $model->ruleId = [];
                $n1 = 0;
                foreach ($map['ruleId'] as $item1) {
                    $model->ruleId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
