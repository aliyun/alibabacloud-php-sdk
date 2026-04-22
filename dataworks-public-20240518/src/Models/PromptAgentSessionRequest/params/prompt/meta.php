<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PromptAgentSessionRequest\params\prompt;

use AlibabaCloud\Dara\Model;

class meta extends Model
{
    /**
     * @var bool
     */
    public $hide;
    protected $_name = [
        'hide' => 'Hide',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hide) {
            $res['Hide'] = $this->hide;
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
        if (isset($map['Hide'])) {
            $model->hide = $map['Hide'];
        }

        return $model;
    }
}
