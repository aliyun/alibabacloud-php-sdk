<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetDefaultKmsInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $defaultKmsInstanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defaultKmsInstanceId' => 'DefaultKmsInstanceId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultKmsInstanceId) {
            $res['DefaultKmsInstanceId'] = $this->defaultKmsInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDefaultKmsInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultKmsInstanceId'])) {
            $model->defaultKmsInstanceId = $map['DefaultKmsInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
