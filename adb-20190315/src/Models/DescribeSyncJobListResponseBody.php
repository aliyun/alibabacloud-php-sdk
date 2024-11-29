<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncJobListResponseBody\syncJobs;
use AlibabaCloud\Tea\Model;

class DescribeSyncJobListResponseBody extends Model
{
    /**
     * @example am-j6c22lubl8d9l3989
     *
     * @var int
     */
    public $DBClusterId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 482B8BAE-6EC0-5C0E-B2AF-FD42A3FC5B67
     *
     * @var string
     */
    public $requestId;

    /**
     * @var syncJobs[]
     */
    public $syncJobs;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'syncJobs'    => 'SyncJobs',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (null !== $this->syncJobs) {
            $res['SyncJobs'] = [];
            if (null !== $this->syncJobs && \is_array($this->syncJobs)) {
                $n = 0;
                foreach ($this->syncJobs as $item) {
                    $res['SyncJobs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeSyncJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['SyncJobs'])) {
            if (!empty($map['SyncJobs'])) {
                $model->syncJobs = [];
                $n               = 0;
                foreach ($map['SyncJobs'] as $item) {
                    $model->syncJobs[$n++] = null !== $item ? syncJobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
