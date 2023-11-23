<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateAlgorithmVersionShrinkRequest extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmSpecShrink) {
            $res['AlgorithmSpec'] = $this->algorithmSpecShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlgorithmVersionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmSpec'])) {
            $model->algorithmSpecShrink = $map['AlgorithmSpec'];
        }

        return $model;
    }
}
