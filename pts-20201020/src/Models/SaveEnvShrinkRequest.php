<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;

class SaveEnvShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $envShrink;
    protected $_name = [
        'envShrink' => 'Env',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->envShrink) {
            $res['Env'] = $this->envShrink;
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
        if (isset($map['Env'])) {
            $model->envShrink = $map['Env'];
        }

        return $model;
    }
}
