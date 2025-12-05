<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;

class SavePtsSceneShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $sceneShrink;
    protected $_name = [
        'sceneShrink' => 'Scene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneShrink) {
            $res['Scene'] = $this->sceneShrink;
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
        if (isset($map['Scene'])) {
            $model->sceneShrink = $map['Scene'];
        }

        return $model;
    }
}
