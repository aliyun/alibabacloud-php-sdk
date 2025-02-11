<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\trafficMirrorConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\trafficMirrorConfig\mirrorGroupConfig\serverGroupTuples;

class mirrorGroupConfig extends Model
{
    /**
     * @var serverGroupTuples[]
     */
    public $serverGroupTuples;
    protected $_name = [
        'serverGroupTuples' => 'ServerGroupTuples',
    ];

    public function validate()
    {
        if (\is_array($this->serverGroupTuples)) {
            Model::validateArray($this->serverGroupTuples);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serverGroupTuples) {
            if (\is_array($this->serverGroupTuples)) {
                $res['ServerGroupTuples'] = [];
                $n1                       = 0;
                foreach ($this->serverGroupTuples as $item1) {
                    $res['ServerGroupTuples'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServerGroupTuples'])) {
            if (!empty($map['ServerGroupTuples'])) {
                $model->serverGroupTuples = [];
                $n1                       = 0;
                foreach ($map['ServerGroupTuples'] as $item1) {
                    $model->serverGroupTuples[$n1++] = serverGroupTuples::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
