<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\userCommand\onStart;

class userCommand extends Model
{
    /**
     * @var onStart
     */
    public $onStart;
    protected $_name = [
        'onStart' => 'OnStart',
    ];

    public function validate()
    {
        if (null !== $this->onStart) {
            $this->onStart->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onStart) {
            $res['OnStart'] = null !== $this->onStart ? $this->onStart->toArray($noStream) : $this->onStart;
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
        if (isset($map['OnStart'])) {
            $model->onStart = onStart::fromMap($map['OnStart']);
        }

        return $model;
    }
}
