<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CheckRecoveryConditionResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example dds-bp1378****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description Indicates whether the recovery conditions are met. Valid values:
     *
     *   **true**: The recovery conditions are met.
     *   **false**: The recovery conditions are not met.
     *
     * @example true
     *
     * @var bool
     */
    public $isValid;

    /**
     * @description The ID of the request.
     *
     * @example D563A3E7-6010-45FE-A0CD-9283414C9657
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'isValid'        => 'IsValid',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
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
     * @return CheckRecoveryConditionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['IsValid'])) {
            $model->isValid = $map['IsValid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
