<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesResponseBody\vcoRouteEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesResponseBody\vpnRouteCounts;

class DescribeVcoRouteEntriesResponseBody extends Model
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
     * @var vcoRouteEntries[]
     */
    public $vcoRouteEntries;
    /**
     * @var vpnRouteCounts[]
     */
    public $vpnRouteCounts;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'vcoRouteEntries' => 'VcoRouteEntries',
        'vpnRouteCounts'  => 'VpnRouteCounts',
    ];

    public function validate()
    {
        if (\is_array($this->vcoRouteEntries)) {
            Model::validateArray($this->vcoRouteEntries);
        }
        if (\is_array($this->vpnRouteCounts)) {
            Model::validateArray($this->vpnRouteCounts);
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

        if (null !== $this->vcoRouteEntries) {
            if (\is_array($this->vcoRouteEntries)) {
                $res['VcoRouteEntries'] = [];
                $n1                     = 0;
                foreach ($this->vcoRouteEntries as $item1) {
                    $res['VcoRouteEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpnRouteCounts) {
            if (\is_array($this->vpnRouteCounts)) {
                $res['VpnRouteCounts'] = [];
                $n1                    = 0;
                foreach ($this->vpnRouteCounts as $item1) {
                    $res['VpnRouteCounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VcoRouteEntries'])) {
            if (!empty($map['VcoRouteEntries'])) {
                $model->vcoRouteEntries = [];
                $n1                     = 0;
                foreach ($map['VcoRouteEntries'] as $item1) {
                    $model->vcoRouteEntries[$n1++] = vcoRouteEntries::fromMap($item1);
                }
            }
        }

        if (isset($map['VpnRouteCounts'])) {
            if (!empty($map['VpnRouteCounts'])) {
                $model->vpnRouteCounts = [];
                $n1                    = 0;
                foreach ($map['VpnRouteCounts'] as $item1) {
                    $model->vpnRouteCounts[$n1++] = vpnRouteCounts::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
