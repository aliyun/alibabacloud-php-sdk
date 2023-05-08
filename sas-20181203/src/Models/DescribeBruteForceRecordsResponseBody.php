<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceRecordsResponseBody\machineList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceRecordsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeBruteForceRecordsResponseBody extends Model
{
    /**
     * @var machineList[]
     */
    public $machineList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machineList' => 'MachineList',
        'pageInfo'    => 'PageInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineList) {
            $res['MachineList'] = [];
            if (null !== $this->machineList && \is_array($this->machineList)) {
                $n = 0;
                foreach ($this->machineList as $item) {
                    $res['MachineList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBruteForceRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineList'])) {
            if (!empty($map['MachineList'])) {
                $model->machineList = [];
                $n                  = 0;
                foreach ($map['MachineList'] as $item) {
                    $model->machineList[$n++] = null !== $item ? machineList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
