<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCustomDataImportSrcDstTablesResponseBody\dataImportSrcDstTables;
use AlibabaCloud\Tea\Model;

class DescribeCustomDataImportSrcDstTablesResponseBody extends Model
{
    /**
     * @var dataImportSrcDstTables
     */
    public $dataImportSrcDstTables;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'dataImportSrcDstTables' => 'DataImportSrcDstTables',
        'requestId'              => 'RequestId',
        'success'                => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataImportSrcDstTables) {
            $res['DataImportSrcDstTables'] = null !== $this->dataImportSrcDstTables ? $this->dataImportSrcDstTables->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomDataImportSrcDstTablesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataImportSrcDstTables'])) {
            $model->dataImportSrcDstTables = dataImportSrcDstTables::fromMap($map['DataImportSrcDstTables']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
