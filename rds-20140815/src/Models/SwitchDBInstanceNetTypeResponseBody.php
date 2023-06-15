<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class SwitchDBInstanceNetTypeResponseBody extends Model
{
    /**
     * @description The endpoint that is used to connect to the instance after the switch of endpoints.
     *
     * @example new**********.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $newConnectionString;

    /**
     * @description The endpoint that is used to connect to the instance before the switch of endpoints.
     *
     * @example rm-bp1**************.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $oldConnectionString;

    /**
     * @description The ID of the request.
     *
     * @example 65BDA532-28AF-4122-AA39-B382721EEE64
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'newConnectionString' => 'NewConnectionString',
        'oldConnectionString' => 'OldConnectionString',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newConnectionString) {
            $res['NewConnectionString'] = $this->newConnectionString;
        }
        if (null !== $this->oldConnectionString) {
            $res['OldConnectionString'] = $this->oldConnectionString;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchDBInstanceNetTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewConnectionString'])) {
            $model->newConnectionString = $map['NewConnectionString'];
        }
        if (isset($map['OldConnectionString'])) {
            $model->oldConnectionString = $map['OldConnectionString'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
