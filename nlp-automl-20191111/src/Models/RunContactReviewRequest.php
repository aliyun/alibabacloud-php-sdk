<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class RunContactReviewRequest extends Model
{
    /**
     * @var string
     */
    public $contactScene;

    /**
     * @var string
     */
    public $contactPath;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'contactScene' => 'ContactScene',
        'contactPath'  => 'ContactPath',
        'product'      => 'Product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactScene) {
            $res['ContactScene'] = $this->contactScene;
        }
        if (null !== $this->contactPath) {
            $res['ContactPath'] = $this->contactPath;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunContactReviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactScene'])) {
            $model->contactScene = $map['ContactScene'];
        }
        if (isset($map['ContactPath'])) {
            $model->contactPath = $map['ContactPath'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
