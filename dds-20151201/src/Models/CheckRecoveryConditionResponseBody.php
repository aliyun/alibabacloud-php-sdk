<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class CheckRecoveryConditionResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var bool
     */
    public $isValid;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
