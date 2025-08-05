<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances;

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
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'requestId' => 'RequestId',
        'synchronizationInstances' => 'SynchronizationInstances',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->synchronizationInstances)) {
            Model::validateArray($this->synchronizationInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->synchronizationInstances)) {
                $res['SynchronizationInstances'] = [];
                $n1 = 0;
                foreach ($this->synchronizationInstances as $item1) {
                    $res['SynchronizationInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
                $n1 = 0;
                foreach ($map['SynchronizationInstances'] as $item1) {
                    $model->synchronizationInstances[$n1] = synchronizationInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
