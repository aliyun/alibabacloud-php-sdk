<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeResponseBody\recycleBinAttribute;

class GetRecycleBinAttributeResponseBody extends Model
{
    /**
     * @var recycleBinAttribute
     */
    public $recycleBinAttribute;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recycleBinAttribute' => 'RecycleBinAttribute',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recycleBinAttribute) {
            $this->recycleBinAttribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recycleBinAttribute) {
            $res['RecycleBinAttribute'] = null !== $this->recycleBinAttribute ? $this->recycleBinAttribute->toArray($noStream) : $this->recycleBinAttribute;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RecycleBinAttribute'])) {
            $model->recycleBinAttribute = recycleBinAttribute::fromMap($map['RecycleBinAttribute']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
