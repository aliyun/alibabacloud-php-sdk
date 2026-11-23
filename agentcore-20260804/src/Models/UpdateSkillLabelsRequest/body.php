<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateSkillLabelsRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $labelDescriptions;

    /**
     * @var string
     */
    public $labels;
    protected $_name = [
        'labelDescriptions' => 'labelDescriptions',
        'labels' => 'labels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelDescriptions) {
            $res['labelDescriptions'] = $this->labelDescriptions;
        }

        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
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
        if (isset($map['labelDescriptions'])) {
            $model->labelDescriptions = $map['labelDescriptions'];
        }

        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }

        return $model;
    }
}
