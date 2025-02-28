<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class EvaluateLocalExtendDiskResponseBody extends Model
{
    /**
     * @var string
     */
    public $available;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $DBInstanceTransType;
    /**
     * @var int
     */
    public $localUpgradeDiskLimit;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
