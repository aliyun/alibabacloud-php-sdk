<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DiagnoseVpnConnectionsResponseBody\vpnConnections;

class DiagnoseVpnConnectionsResponseBody extends Model
{
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
    /**
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
        if (\is_array($this->vpnConnections)) {
            Model::validateArray($this->vpnConnections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vpnConnections)) {
                $res['VpnConnections'] = [];
                $n1                    = 0;
                foreach ($this->vpnConnections as $item1) {
                    $res['VpnConnections'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                    = 0;
                foreach ($map['VpnConnections'] as $item1) {
                    $model->vpnConnections[$n1++] = vpnConnections::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
