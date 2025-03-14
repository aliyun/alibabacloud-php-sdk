<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskLogDetailResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskLogDetailResponseBody\taskRecordDetails;
use AlibabaCloud\Tea\Model;

class DescribeSyncAssetTaskLogDetailResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF46038
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the tasks.
     *
     * @var taskRecordDetails[]
     */
    public $taskRecordDetails;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
        'taskRecordDetails' => 'TaskRecordDetails',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskRecordDetails) {
            $res['TaskRecordDetails'] = [];
            if (null !== $this->taskRecordDetails && \is_array($this->taskRecordDetails)) {
                $n = 0;
                foreach ($this->taskRecordDetails as $item) {
                    $res['TaskRecordDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyncAssetTaskLogDetailResponseBody
     */
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
                $n = 0;
                foreach ($map['TaskRecordDetails'] as $item) {
                    $model->taskRecordDetails[$n++] = null !== $item ? taskRecordDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
