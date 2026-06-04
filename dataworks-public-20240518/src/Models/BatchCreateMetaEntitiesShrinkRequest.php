<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class BatchCreateMetaEntitiesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $entitiesShrink;
    protected $_name = [
        'entitiesShrink' => 'Entities',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entitiesShrink) {
            $res['Entities'] = $this->entitiesShrink;
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
        if (isset($map['Entities'])) {
            $model->entitiesShrink = $map['Entities'];
        }

        return $model;
    }
}
