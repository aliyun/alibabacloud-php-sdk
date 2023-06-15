<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckCreateDdrDBInstanceResponseBody extends Model
{
    /**
     * @description Indicates whether the data of the source instance can be restored across regions. Valid values:** true and false**
     *
     * @example true
     *
     * @var string
     */
    public $isValid;

    /**
     * @description The ID of the request.
     *
     * @example 1E43AAE0-BEE8-43DA-860D-EAF2AA0724DC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isValid'   => 'IsValid',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isValid) {
            $res['IsValid'] = $this->isValid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCreateDdrDBInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsValid'])) {
            $model->isValid = $map['IsValid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
