<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class UpdateAlgorithmVersionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmSpecShrink;
    protected $_name = [
        'algorithmSpecShrink' => 'AlgorithmSpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmSpecShrink) {
            $res['AlgorithmSpec'] = $this->algorithmSpecShrink;
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
        if (isset($map['AlgorithmSpec'])) {
            $model->algorithmSpecShrink = $map['AlgorithmSpec'];
        }

        return $model;
    }
}
