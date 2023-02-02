<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseResponseBody extends Model
{
    /**
     * @description The name of the database.
     *
     * @example sms_pre
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The request ID.
     *
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatabaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
