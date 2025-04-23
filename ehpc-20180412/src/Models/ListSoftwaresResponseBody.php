<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares;

class ListSoftwaresResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var softwares
     */
    public $softwares;
    protected $_name = [
        'requestId' => 'RequestId',
        'softwares' => 'Softwares',
    ];

    public function validate()
    {
        if (null !== $this->softwares) {
            $this->softwares->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->softwares) {
            $res['Softwares'] = null !== $this->softwares ? $this->softwares->toArray($noStream) : $this->softwares;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Softwares'])) {
            $model->softwares = softwares::fromMap($map['Softwares']);
        }

        return $model;
    }
}
