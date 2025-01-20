<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListLifecycleRetrieveJobsResponseBody\lifecycleRetrieveJobs;

class ListLifecycleRetrieveJobsResponseBody extends Model
{
    /**
     * @var lifecycleRetrieveJobs[]
     */
    public $lifecycleRetrieveJobs;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lifecycleRetrieveJobs' => 'LifecycleRetrieveJobs',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->lifecycleRetrieveJobs)) {
            Model::validateArray($this->lifecycleRetrieveJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lifecycleRetrieveJobs) {
            if (\is_array($this->lifecycleRetrieveJobs)) {
                $res['LifecycleRetrieveJobs'] = [];
                $n1                           = 0;
                foreach ($this->lifecycleRetrieveJobs as $item1) {
                    $res['LifecycleRetrieveJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LifecycleRetrieveJobs'])) {
            if (!empty($map['LifecycleRetrieveJobs'])) {
                $model->lifecycleRetrieveJobs = [];
                $n1                           = 0;
                foreach ($map['LifecycleRetrieveJobs'] as $item1) {
                    $model->lifecycleRetrieveJobs[$n1++] = lifecycleRetrieveJobs::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
