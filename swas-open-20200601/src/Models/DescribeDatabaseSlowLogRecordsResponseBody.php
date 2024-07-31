<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseSlowLogRecordsResponseBody\slowLogs;
use AlibabaCloud\Tea\Model;

class DescribeDatabaseSlowLogRecordsResponseBody extends Model
{
    /**
     * @description The database engine that the instance runs.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The page number.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 30 to 100.
     *
     * Default value: 30.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of logical reads.
     *
     * @example 200
     *
     * @var int
     */
    public $physicalIORead;

    /**
     * @description The request ID.
     *
     * @example 30637AD6-D977-4833-A54C-CC89483E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The slow query logs returned.
     *
     * @var slowLogs[]
     */
    public $slowLogs;

    /**
     * @description The total number of entries returned.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'engine'         => 'Engine',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'physicalIORead' => 'PhysicalIORead',
        'requestId'      => 'RequestId',
        'slowLogs'       => 'SlowLogs',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->physicalIORead) {
            $res['PhysicalIORead'] = $this->physicalIORead;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slowLogs) {
            $res['SlowLogs'] = [];
            if (null !== $this->slowLogs && \is_array($this->slowLogs)) {
                $n = 0;
                foreach ($this->slowLogs as $item) {
                    $res['SlowLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatabaseSlowLogRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PhysicalIORead'])) {
            $model->physicalIORead = $map['PhysicalIORead'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlowLogs'])) {
            if (!empty($map['SlowLogs'])) {
                $model->slowLogs = [];
                $n               = 0;
                foreach ($map['SlowLogs'] as $item) {
                    $model->slowLogs[$n++] = null !== $item ? slowLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
