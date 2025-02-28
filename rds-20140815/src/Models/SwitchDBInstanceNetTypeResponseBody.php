<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class SwitchDBInstanceNetTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $newConnectionString;
    /**
     * @var string
     */
    public $oldConnectionString;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
