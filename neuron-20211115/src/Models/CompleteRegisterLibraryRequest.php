<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class CompleteRegisterLibraryRequest extends Model
{
    /**
     * @var int
     */
    public $dependIntegral;

    /**
     * @var int
     */
    public $marketId;
    protected $_name = [
        'dependIntegral' => 'dependIntegral',
        'marketId' => 'marketId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependIntegral) {
            $res['dependIntegral'] = $this->dependIntegral;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
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
        if (isset($map['dependIntegral'])) {
            $model->dependIntegral = $map['dependIntegral'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        return $model;
    }
}
