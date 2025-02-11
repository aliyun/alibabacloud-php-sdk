<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseSlowLogRecordsResponseBody\slowLogs;

class DescribeDatabaseSlowLogRecordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $engine;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $physicalIORead;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var slowLogs[]
     */
    public $slowLogs;
    /**
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
        if (\is_array($this->slowLogs)) {
            Model::validateArray($this->slowLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->slowLogs)) {
                $res['SlowLogs'] = [];
                $n1              = 0;
                foreach ($this->slowLogs as $item1) {
                    $res['SlowLogs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
                $n1              = 0;
                foreach ($map['SlowLogs'] as $item1) {
                    $model->slowLogs[$n1++] = slowLogs::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
