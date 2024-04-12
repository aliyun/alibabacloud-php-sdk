<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseResponseBody\database;
use AlibabaCloud\Tea\Model;

class GetDatabaseResponseBody extends Model
{
    /**
     * @var database
     */
    public $database;

    /**
     * @example 4D72B883-9D15-5B05-B987-DFD10EB1FFB4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'database'  => 'Database',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = null !== $this->database ? $this->database->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatabaseResponseBody
     */
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
