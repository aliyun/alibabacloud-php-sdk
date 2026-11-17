<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest\document;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest\document\yuque\teams;

class yuque extends Model
{
    /**
     * @var teams[]
     */
    public $teams;
    protected $_name = [
        'teams' => 'Teams',
    ];

    public function validate()
    {
        if (\is_array($this->teams)) {
            Model::validateArray($this->teams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->teams) {
            if (\is_array($this->teams)) {
                $res['Teams'] = [];
                $n1 = 0;
                foreach ($this->teams as $item1) {
                    $res['Teams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Teams'])) {
            if (!empty($map['Teams'])) {
                $model->teams = [];
                $n1 = 0;
                foreach ($map['Teams'] as $item1) {
                    $model->teams[$n1] = teams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
