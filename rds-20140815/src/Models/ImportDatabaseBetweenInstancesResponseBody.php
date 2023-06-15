<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ImportDatabaseBetweenInstancesResponseBody extends Model
{
    /**
     * @description The ID of the import task.
     *
     * @example 852654*****
     *
     * @var string
     */
    public $importId;

    /**
     * @description The ID of the request.
     *
     * @example 5A77D650-27A1-4E08-AD9E-59008EDB6927
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'importId'  => 'ImportId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->importId) {
            $res['ImportId'] = $this->importId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportDatabaseBetweenInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImportId'])) {
            $model->importId = $map['ImportId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
