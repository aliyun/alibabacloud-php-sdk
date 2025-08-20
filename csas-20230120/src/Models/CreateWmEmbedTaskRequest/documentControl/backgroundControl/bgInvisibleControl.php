<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl;

use AlibabaCloud\Dara\Model;

class bgInvisibleControl extends Model
{
    /**
     * @var int
     */
    public $opacity;
    protected $_name = [
        'opacity' => 'Opacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opacity) {
            $res['Opacity'] = $this->opacity;
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
        if (isset($map['Opacity'])) {
            $model->opacity = $map['Opacity'];
        }

        return $model;
    }
}
