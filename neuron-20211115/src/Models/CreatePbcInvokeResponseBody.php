<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class CreatePbcInvokeResponseBody extends Model
{
    /**
     * @var int
     */
    public $pbcInvokeId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pbcInvokeId' => 'pbcInvokeId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pbcInvokeId) {
            $res['pbcInvokeId'] = $this->pbcInvokeId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['pbcInvokeId'])) {
            $model->pbcInvokeId = $map['pbcInvokeId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
