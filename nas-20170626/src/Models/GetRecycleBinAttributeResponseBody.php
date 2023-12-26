<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeResponseBody\recycleBinAttribute;
use AlibabaCloud\Tea\Model;

class GetRecycleBinAttributeResponseBody extends Model
{
    /**
     * @description The description of the recycle bin.
     *
     * @var recycleBinAttribute
     */
    public $recycleBinAttribute;

    /**
     * @description The request ID.
     *
     * @example 9E15E394-38A6-457A-A62A-D9797C9A****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recycleBinAttribute' => 'RecycleBinAttribute',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recycleBinAttribute) {
            $res['RecycleBinAttribute'] = null !== $this->recycleBinAttribute ? $this->recycleBinAttribute->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RecycleBinAttribute'])) {
            $model->recycleBinAttribute = recycleBinAttribute::fromMap($map['RecycleBinAttribute']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
