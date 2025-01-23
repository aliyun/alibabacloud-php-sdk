<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class UpdateAlgorithmVersionRequest extends Model
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
        if (null !== $this->algorithmSpec) {
            $this->algorithmSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmSpec) {
            $res['AlgorithmSpec'] = null !== $this->algorithmSpec ? $this->algorithmSpec->toArray($noStream) : $this->algorithmSpec;
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
            $model->algorithmSpec = AlgorithmSpec::fromMap($map['AlgorithmSpec']);
        }

        return $model;
    }
}
