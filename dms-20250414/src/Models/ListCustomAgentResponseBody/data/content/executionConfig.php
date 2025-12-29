<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListCustomAgentResponseBody\data\content;

use AlibabaCloud\Dara\Model;

class executionConfig extends Model
{
    /**
     * @var bool
     */
    public $skipPlan;
    protected $_name = [
        'skipPlan' => 'SkipPlan',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skipPlan) {
            $res['SkipPlan'] = $this->skipPlan;
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
        if (isset($map['SkipPlan'])) {
            $model->skipPlan = $map['SkipPlan'];
        }

        return $model;
    }
}
