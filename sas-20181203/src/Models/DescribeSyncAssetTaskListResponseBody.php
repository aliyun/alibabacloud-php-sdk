<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskListResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskListResponseBody\taskRecords;

class DescribeSyncAssetTaskListResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var taskRecords[]
     */
    public $taskRecords;
    protected $_name = [
        'pageInfo'    => 'PageInfo',
        'requestId'   => 'RequestId',
        'taskRecords' => 'TaskRecords',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->taskRecords)) {
            Model::validateArray($this->taskRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskRecords) {
            if (\is_array($this->taskRecords)) {
                $res['TaskRecords'] = [];
                $n1                 = 0;
                foreach ($this->taskRecords as $item1) {
                    $res['TaskRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskRecords'])) {
            if (!empty($map['TaskRecords'])) {
                $model->taskRecords = [];
                $n1                 = 0;
                foreach ($map['TaskRecords'] as $item1) {
                    $model->taskRecords[$n1++] = taskRecords::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
