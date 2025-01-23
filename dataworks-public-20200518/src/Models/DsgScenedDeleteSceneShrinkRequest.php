<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgScenedDeleteSceneShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $idsShrink;
    protected $_name = [
        'idsShrink' => 'Ids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }

        return $model;
    }
}
