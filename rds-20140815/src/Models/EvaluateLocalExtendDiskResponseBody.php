<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class EvaluateLocalExtendDiskResponseBody extends Model
{
    /**
     * @description Indicates whether the instance is available. Valid values: true and false.
     *
     * @example True
     *
     * @var string
     */
    public $available;

    /**
     * @description The instance ID.
     *
     * @example rm-bp1375i66nd******
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The data transfer type supported by the instance.
     *
     * @example 0
     *
     * @var string
     */
    public $DBInstanceTransType;

    /**
     * @description The maximum value of the local disk. Unit: GB.
     *
     * @example 100
     *
     * @var int
     */
    public $localUpgradeDiskLimit;

    /**
     * @description The request ID.
     *
     * @example A4C4D26F-E5CE-5A28-8C54-46A6FB318223
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'available'             => 'Available',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceTransType'   => 'DBInstanceTransType',
        'localUpgradeDiskLimit' => 'LocalUpgradeDiskLimit',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceTransType) {
            $res['DBInstanceTransType'] = $this->DBInstanceTransType;
        }
        if (null !== $this->localUpgradeDiskLimit) {
            $res['LocalUpgradeDiskLimit'] = $this->localUpgradeDiskLimit;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateLocalExtendDiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceTransType'])) {
            $model->DBInstanceTransType = $map['DBInstanceTransType'];
        }
        if (isset($map['LocalUpgradeDiskLimit'])) {
            $model->localUpgradeDiskLimit = $map['LocalUpgradeDiskLimit'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
