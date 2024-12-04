<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmDefResponseBody extends Model
{
    /**
     * @example B4F16666-FD54-5D9D-A362-53A4C66692DF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $spec;
    protected $_name = [
        'requestId' => 'RequestId',
        'spec'      => 'Spec',
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
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmDefResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
