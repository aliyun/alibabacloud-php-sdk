<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class StopTaskInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $idsShrink;
    protected $_name = [
        'comment'   => 'Comment',
        'idsShrink' => 'Ids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }

        return $model;
    }
}
