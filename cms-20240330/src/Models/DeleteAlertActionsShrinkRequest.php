<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteAlertActionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alertActionIdsShrink;
    protected $_name = [
        'alertActionIdsShrink' => 'alertActionIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertActionIdsShrink) {
            $res['alertActionIds'] = $this->alertActionIdsShrink;
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
        if (isset($map['alertActionIds'])) {
            $model->alertActionIdsShrink = $map['alertActionIds'];
        }

        return $model;
    }
}
