<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class GetDcdnKvResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example D61E4801-EAFF-4A63-AAE1-FBF6CE1CFD1C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The value of the key.
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'requestId' => 'RequestId',
        'value'     => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDcdnKvResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
