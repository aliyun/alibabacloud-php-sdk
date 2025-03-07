<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateHadoopDataSourceResponseBody extends Model
{
    /**
     * @description Data source ID.
     *
     * @example 123
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description Request ID.
     *
     * @example 2C125605-266F-41CA-8AC5-3A643D4F42C5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHadoopDataSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
