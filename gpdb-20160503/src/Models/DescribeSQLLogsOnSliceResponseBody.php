<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsOnSliceResponseBody\sliceLogItems;
use AlibabaCloud\Tea\Model;

class DescribeSQLLogsOnSliceResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sliceLogItems[]
     */
    public $sliceLogItems;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'requestId'       => 'RequestId',
        'sliceLogItems'   => 'SliceLogItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sliceLogItems) {
            $res['SliceLogItems'] = [];
            if (null !== $this->sliceLogItems && \is_array($this->sliceLogItems)) {
                $n = 0;
                foreach ($this->sliceLogItems as $item) {
                    $res['SliceLogItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLLogsOnSliceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SliceLogItems'])) {
            if (!empty($map['SliceLogItems'])) {
                $model->sliceLogItems = [];
                $n                    = 0;
                foreach ($map['SliceLogItems'] as $item) {
                    $model->sliceLogItems[$n++] = null !== $item ? sliceLogItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
