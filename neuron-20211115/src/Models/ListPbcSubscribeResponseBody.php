<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListPbcSubscribeResponseBody extends Model
{
    /**
     * @var PbcListResult
     */
    public $pbcListResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pbcListResult' => 'pbcListResult',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->pbcListResult) {
            $this->pbcListResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pbcListResult) {
            $res['pbcListResult'] = null !== $this->pbcListResult ? $this->pbcListResult->toArray($noStream) : $this->pbcListResult;
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
        if (isset($map['pbcListResult'])) {
            $model->pbcListResult = PbcListResult::fromMap($map['pbcListResult']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
