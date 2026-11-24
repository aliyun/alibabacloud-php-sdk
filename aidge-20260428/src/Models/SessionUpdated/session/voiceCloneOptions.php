<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session;

use AlibabaCloud\Dara\Model;

class voiceCloneOptions extends Model
{
    /**
     * @var string
     */
    public $frequency;
    protected $_name = [
        'frequency' => 'frequency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frequency) {
            $res['frequency'] = $this->frequency;
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
        if (isset($map['frequency'])) {
            $model->frequency = $map['frequency'];
        }

        return $model;
    }
}
