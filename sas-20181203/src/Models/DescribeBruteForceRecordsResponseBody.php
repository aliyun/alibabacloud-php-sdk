<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceRecordsResponseBody\machineList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceRecordsResponseBody\pageInfo;

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
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machineList' => 'MachineList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->machineList)) {
            Model::validateArray($this->machineList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineList) {
            if (\is_array($this->machineList)) {
                $res['MachineList'] = [];
                $n1 = 0;
                foreach ($this->machineList as $item1) {
                    $res['MachineList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MachineList'])) {
            if (!empty($map['MachineList'])) {
                $model->machineList = [];
                $n1 = 0;
                foreach ($map['MachineList'] as $item1) {
                    $model->machineList[$n1] = machineList::fromMap($item1);
                    ++$n1;
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
