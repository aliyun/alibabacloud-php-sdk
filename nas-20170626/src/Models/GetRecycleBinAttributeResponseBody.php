<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeResponseBody\recycleBinAttribute;
use AlibabaCloud\Tea\Model;

class GetRecycleBinAttributeResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var recycleBinAttribute
     */
    public $recycleBinAttribute;
    protected $_name = [
        'requestId'           => 'RequestId',
        'recycleBinAttribute' => 'RecycleBinAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recycleBinAttribute) {
            $res['RecycleBinAttribute'] = null !== $this->recycleBinAttribute ? $this->recycleBinAttribute->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRecycleBinAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecycleBinAttribute'])) {
            $model->recycleBinAttribute = recycleBinAttribute::fromMap($map['RecycleBinAttribute']);
        }

        return $model;
    }
}
