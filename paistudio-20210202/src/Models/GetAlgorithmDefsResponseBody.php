<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmDefsResponseBody extends Model
{
    /**
     * @example F082BD0D-21E1-5F9B-81A0-AB07485B03CD
     *
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $specs;
    protected $_name = [
        'requestId' => 'RequestId',
        'specs'     => 'Specs',
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
        if (null !== $this->specs) {
            $res['Specs'] = $this->specs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmDefsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Specs'])) {
            if (!empty($map['Specs'])) {
                $model->specs = $map['Specs'];
            }
        }

        return $model;
    }
}
