<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskLogDetailResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskLogDetailResponseBody\taskRecordDetails;

class DescribeSyncAssetTaskLogDetailResponseBody extends Model
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
     * @var taskRecordDetails[]
     */
    public $taskRecordDetails;
    protected $_name = [
        'pageInfo'          => 'PageInfo',
        'requestId'         => 'RequestId',
        'taskRecordDetails' => 'TaskRecordDetails',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->taskRecordDetails)) {
            Model::validateArray($this->taskRecordDetails);
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

        if (null !== $this->taskRecordDetails) {
            if (\is_array($this->taskRecordDetails)) {
                $res['TaskRecordDetails'] = [];
                $n1                       = 0;
                foreach ($this->taskRecordDetails as $item1) {
                    $res['TaskRecordDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TaskRecordDetails'])) {
            if (!empty($map['TaskRecordDetails'])) {
                $model->taskRecordDetails = [];
                $n1                       = 0;
                foreach ($map['TaskRecordDetails'] as $item1) {
                    $model->taskRecordDetails[$n1++] = taskRecordDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
