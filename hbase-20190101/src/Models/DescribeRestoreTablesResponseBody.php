<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreFull;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreIncrDetail;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreSchema;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreSummary;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\tables;
use AlibabaCloud\Tea\Model;

class DescribeRestoreTablesResponseBody extends Model
{
    /**
     * @var restoreSchema
     */
    public $restoreSchema;

    /**
     * @var restoreFull
     */
    public $restoreFull;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tables
     */
    public $tables;

    /**
     * @var restoreSummary
     */
    public $restoreSummary;

    /**
     * @var restoreIncrDetail
     */
    public $restoreIncrDetail;
    protected $_name = [
        'restoreSchema'     => 'RestoreSchema',
        'restoreFull'       => 'RestoreFull',
        'requestId'         => 'RequestId',
        'tables'            => 'Tables',
        'restoreSummary'    => 'RestoreSummary',
        'restoreIncrDetail' => 'RestoreIncrDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreSchema) {
            $res['RestoreSchema'] = null !== $this->restoreSchema ? $this->restoreSchema->toMap() : null;
        }
        if (null !== $this->restoreFull) {
            $res['RestoreFull'] = null !== $this->restoreFull ? $this->restoreFull->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tables) {
            $res['Tables'] = null !== $this->tables ? $this->tables->toMap() : null;
        }
        if (null !== $this->restoreSummary) {
            $res['RestoreSummary'] = null !== $this->restoreSummary ? $this->restoreSummary->toMap() : null;
        }
        if (null !== $this->restoreIncrDetail) {
            $res['RestoreIncrDetail'] = null !== $this->restoreIncrDetail ? $this->restoreIncrDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreTablesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreSchema'])) {
            $model->restoreSchema = restoreSchema::fromMap($map['RestoreSchema']);
        }
        if (isset($map['RestoreFull'])) {
            $model->restoreFull = restoreFull::fromMap($map['RestoreFull']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tables'])) {
            $model->tables = tables::fromMap($map['Tables']);
        }
        if (isset($map['RestoreSummary'])) {
            $model->restoreSummary = restoreSummary::fromMap($map['RestoreSummary']);
        }
        if (isset($map['RestoreIncrDetail'])) {
            $model->restoreIncrDetail = restoreIncrDetail::fromMap($map['RestoreIncrDetail']);
        }

        return $model;
    }
}
