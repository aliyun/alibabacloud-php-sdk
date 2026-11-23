<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceCommand;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $directAgent;

    /**
     * @var string
     */
    public $deepthink;
    protected $_name = [
        'directAgent' => 'directAgent',
        'deepthink' => 'deepthink',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directAgent) {
            $res['directAgent'] = $this->directAgent;
        }

        if (null !== $this->deepthink) {
            $res['deepthink'] = $this->deepthink;
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
        if (isset($map['directAgent'])) {
            $model->directAgent = $map['directAgent'];
        }

        if (isset($map['deepthink'])) {
            $model->deepthink = $map['deepthink'];
        }

        return $model;
    }
}
