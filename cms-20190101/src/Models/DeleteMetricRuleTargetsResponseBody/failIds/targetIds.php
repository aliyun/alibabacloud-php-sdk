<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsResponseBody\failIds;

use AlibabaCloud\Dara\Model;

class targetIds extends Model
{
    /**
     * @var string[]
     */
    public $targetId;
    protected $_name = [
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
        if (\is_array($this->targetId)) {
            Model::validateArray($this->targetId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetId) {
            if (\is_array($this->targetId)) {
                $res['TargetId'] = [];
                $n1 = 0;
                foreach ($this->targetId as $item1) {
                    $res['TargetId'][$n1] = $item1;
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
        if (isset($map['TargetId'])) {
            if (!empty($map['TargetId'])) {
                $model->targetId = [];
                $n1 = 0;
                foreach ($map['TargetId'] as $item1) {
                    $model->targetId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
