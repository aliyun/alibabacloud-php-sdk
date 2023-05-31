<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListUninstallAegisMachinesResponseBody\machineList;
use AlibabaCloud\Tea\Model;

class ListUninstallAegisMachinesResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description An array that consists of the information about servers.
     *
     * @var machineList[]
     */
    public $machineList;

    /**
     * @description The number of entries returned per page.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 151F6EB6-D5F3-417A-AF7B-4D84975DB586
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 44
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'machineList' => 'MachineList',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->machineList) {
            $res['MachineList'] = [];
            if (null !== $this->machineList && \is_array($this->machineList)) {
                $n = 0;
                foreach ($this->machineList as $item) {
                    $res['MachineList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

    /**
     * @param array $map
     *
     * @return ListUninstallAegisMachinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['MachineList'])) {
            if (!empty($map['MachineList'])) {
                $model->machineList = [];
                $n                  = 0;
                foreach ($map['MachineList'] as $item) {
                    $model->machineList[$n++] = null !== $item ? machineList::fromMap($item) : $item;
                }
            }
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
