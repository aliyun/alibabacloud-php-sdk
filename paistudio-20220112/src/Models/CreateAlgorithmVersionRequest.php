<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateAlgorithmVersionRequest extends Model
{
    /**
     * @var AlgorithmSpec
     */
    public $algorithmSpec;
    protected $_name = [
        'algorithmSpec' => 'AlgorithmSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmSpec) {
            $res['AlgorithmSpec'] = null !== $this->algorithmSpec ? $this->algorithmSpec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlgorithmVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmSpec'])) {
            $model->algorithmSpec = AlgorithmSpec::fromMap($map['AlgorithmSpec']);
        }

        return $model;
    }
}
