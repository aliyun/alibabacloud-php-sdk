<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DiagnoseVpnConnectionsResponseBody\vpnConnections;
use AlibabaCloud\Tea\Model;

class DiagnoseVpnConnectionsResponseBody extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example B8094E1E-935B-1397-96A8-4F87A5D1BF29
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The diagnostic information.
     *
     * @var vpnConnections[]
     */
    public $vpnConnections;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
        'vpnConnections' => 'VpnConnections',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vpnConnections) {
            $res['VpnConnections'] = [];
            if (null !== $this->vpnConnections && \is_array($this->vpnConnections)) {
                $n = 0;
                foreach ($this->vpnConnections as $item) {
                    $res['VpnConnections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiagnoseVpnConnectionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['VpnConnections'])) {
            if (!empty($map['VpnConnections'])) {
                $model->vpnConnections = [];
                $n                     = 0;
                foreach ($map['VpnConnections'] as $item) {
                    $model->vpnConnections[$n++] = null !== $item ? vpnConnections::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
