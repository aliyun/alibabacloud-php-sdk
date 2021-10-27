<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCustomDataExportSrcDstTablesResponseBody\dataExportSrcDstTables;
use AlibabaCloud\Tea\Model;

class DescribeCustomDataExportSrcDstTablesResponseBody extends Model
{
    /**
     * @var dataExportSrcDstTables
     */
    public $dataExportSrcDstTables;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'dataExportSrcDstTables' => 'DataExportSrcDstTables',
        'requestId'              => 'RequestId',
        'success'                => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataExportSrcDstTables) {
            $res['DataExportSrcDstTables'] = null !== $this->dataExportSrcDstTables ? $this->dataExportSrcDstTables->toMap() : null;
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
     * @return DescribeCustomDataExportSrcDstTablesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataExportSrcDstTables'])) {
            $model->dataExportSrcDstTables = dataExportSrcDstTables::fromMap($map['DataExportSrcDstTables']);
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
