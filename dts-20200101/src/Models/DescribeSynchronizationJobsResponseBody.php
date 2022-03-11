<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances;
use AlibabaCloud\Tea\Model;

class DescribeSynchronizationJobsResponseBody extends Model
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
     * @var synchronizationInstances[]
     */
    public $synchronizationInstances;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'pageNumber'               => 'PageNumber',
        'pageRecordCount'          => 'PageRecordCount',
        'requestId'                => 'RequestId',
        'synchronizationInstances' => 'SynchronizationInstances',
        'totalRecordCount'         => 'TotalRecordCount',
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
        if (null !== $this->synchronizationInstances) {
            $res['SynchronizationInstances'] = [];
            if (null !== $this->synchronizationInstances && \is_array($this->synchronizationInstances)) {
                $n = 0;
                foreach ($this->synchronizationInstances as $item) {
                    $res['SynchronizationInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSynchronizationJobsResponseBody
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
        if (isset($map['SynchronizationInstances'])) {
            if (!empty($map['SynchronizationInstances'])) {
                $model->synchronizationInstances = [];
                $n                               = 0;
                foreach ($map['SynchronizationInstances'] as $item) {
                    $model->synchronizationInstances[$n++] = null !== $item ? synchronizationInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
