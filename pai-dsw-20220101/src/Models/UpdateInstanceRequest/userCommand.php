<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\userCommand\onStart;
use AlibabaCloud\Tea\Model;

class userCommand extends Model
{
    /**
     * @var onStart
     */
    public $onStart;
    protected $_name = [
        'onStart' => 'OnStart',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->onStart) {
            $res['OnStart'] = null !== $this->onStart ? $this->onStart->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnStart'])) {
            $model->onStart = onStart::fromMap($map['OnStart']);
        }

        return $model;
    }
}
