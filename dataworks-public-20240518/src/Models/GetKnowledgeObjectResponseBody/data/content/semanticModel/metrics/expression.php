<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeObjectResponseBody\data\content\semanticModel\metrics;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeObjectResponseBody\data\content\semanticModel\metrics\expression\dialects;

class expression extends Model
{
    /**
     * @var dialects[]
     */
    public $dialects;
    protected $_name = [
        'dialects' => 'Dialects',
    ];

    public function validate()
    {
        if (\is_array($this->dialects)) {
            Model::validateArray($this->dialects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialects) {
            if (\is_array($this->dialects)) {
                $res['Dialects'] = [];
                $n1 = 0;
                foreach ($this->dialects as $item1) {
                    $res['Dialects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Dialects'])) {
            if (!empty($map['Dialects'])) {
                $model->dialects = [];
                $n1 = 0;
                foreach ($map['Dialects'] as $item1) {
                    $model->dialects[$n1] = dialects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
