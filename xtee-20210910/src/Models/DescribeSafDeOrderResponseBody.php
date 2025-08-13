<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafDeOrderResponseBody\resultObject;

class DescribeSafDeOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resultObject
     */
    public $resultObject;
    protected $_name = [
        'requestId' => 'requestId',
        'resultObject' => 'resultObject',
    ];

    public function validate()
    {
        if (null !== $this->resultObject) {
            $this->resultObject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resultObject) {
            $res['resultObject'] = null !== $this->resultObject ? $this->resultObject->toArray($noStream) : $this->resultObject;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resultObject'])) {
            $model->resultObject = resultObject::fromMap($map['resultObject']);
        }

        return $model;
    }
}
