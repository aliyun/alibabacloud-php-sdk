<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListChannelAlertsResponseBody\programAlerts;
use AlibabaCloud\Tea\Model;

class ListChannelAlertsResponseBody extends Model
{
    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The alerts.
     *
     * @var programAlerts[]
     */
    public $programAlerts;

    /**
     * @description **Request ID**
     *
     * @example xxx-xxxx-xxxxx-xxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of alerts returned.
     *
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'programAlerts' => 'ProgramAlerts',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->programAlerts) {
            $res['ProgramAlerts'] = [];
            if (null !== $this->programAlerts && \is_array($this->programAlerts)) {
                $n = 0;
                foreach ($this->programAlerts as $item) {
                    $res['ProgramAlerts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChannelAlertsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProgramAlerts'])) {
            if (!empty($map['ProgramAlerts'])) {
                $model->programAlerts = [];
                $n                    = 0;
                foreach ($map['ProgramAlerts'] as $item) {
                    $model->programAlerts[$n++] = null !== $item ? programAlerts::fromMap($item) : $item;
                }
            }
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
