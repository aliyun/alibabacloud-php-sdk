<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories;
use AlibabaCloud\Tea\Model;

class DescribeAutoProvisioningGroupHistoryResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;

    /**
     * @var autoProvisioningGroupHistories[]
     */
    public $autoProvisioningGroupHistories;
    protected $_name = [
        'totalCount'                     => 'TotalCount',
        'pageSize'                       => 'PageSize',
        'requestId'                      => 'RequestId',
        'pageNumber'                     => 'PageNumber',
        'autoProvisioningGroupHistories' => 'AutoProvisioningGroupHistories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->autoProvisioningGroupHistories) {
            $res['AutoProvisioningGroupHistories'] = [];
            if (null !== $this->autoProvisioningGroupHistories && \is_array($this->autoProvisioningGroupHistories)) {
                $n = 0;
                foreach ($this->autoProvisioningGroupHistories as $item) {
                    $res['AutoProvisioningGroupHistories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoProvisioningGroupHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['AutoProvisioningGroupHistories'])) {
            if (!empty($map['AutoProvisioningGroupHistories'])) {
                $model->autoProvisioningGroupHistories = [];
                $n                                     = 0;
                foreach ($map['AutoProvisioningGroupHistories'] as $item) {
                    $model->autoProvisioningGroupHistories[$n++] = null !== $item ? autoProvisioningGroupHistories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
