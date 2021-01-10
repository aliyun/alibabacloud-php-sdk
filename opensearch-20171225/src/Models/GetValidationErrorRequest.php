<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class GetValidationErrorRequest extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    protected $_name = [
        'errorCode' => 'errorCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetValidationErrorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        return $model;
    }
}
