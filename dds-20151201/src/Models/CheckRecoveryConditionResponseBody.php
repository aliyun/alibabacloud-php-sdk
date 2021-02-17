<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CheckRecoveryConditionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var bool
     */
    public $isValid;
    protected $_name = [
        'requestId'      => 'RequestId',
        'DBInstanceName' => 'DBInstanceName',
        'isValid'        => 'IsValid',
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
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->isValid) {
            $res['IsValid'] = $this->isValid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckRecoveryConditionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['IsValid'])) {
            $model->isValid = $map['IsValid'];
        }

        return $model;
    }
}
