<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ScanSensitiveDataResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $sensitives;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'sensitives' => 'Sensitives',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitives) {
            $res['Sensitives'] = $this->sensitives;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Sensitives'])) {
            $model->sensitives = $map['Sensitives'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
