<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseResponseBody\database;

class GetDatabaseResponseBody extends Model
{
    /**
     * @var database
     */
    public $database;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'database' => 'Database',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->database) {
            $this->database->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = null !== $this->database ? $this->database->toArray($noStream) : $this->database;
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
        if (isset($map['Database'])) {
            $model->database = database::fromMap($map['Database']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
