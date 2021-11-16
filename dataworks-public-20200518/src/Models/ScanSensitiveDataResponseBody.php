<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ScanSensitiveDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $sensitives;
    protected $_name = [
        'requestId'  => 'RequestId',
        'sensitives' => 'Sensitives',
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
        if (null !== $this->sensitives) {
            $res['Sensitives'] = $this->sensitives;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanSensitiveDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sensitives'])) {
            $model->sensitives = $map['Sensitives'];
        }

        return $model;
    }
}
