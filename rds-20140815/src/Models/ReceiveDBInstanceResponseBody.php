<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ReceiveDBInstanceResponseBody extends Model
{
    /**
     * @description The ID of the disaster recovery instance after the switchover.
     *
     * @example rm-tr2whku*****
     *
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @description The request ID.
     *
     * @example EFB6083A-7699-489B-8278-C0CB4793A96E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'guardDBInstanceId' => 'GuardDBInstanceId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->guardDBInstanceId) {
            $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReceiveDBInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GuardDBInstanceId'])) {
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
