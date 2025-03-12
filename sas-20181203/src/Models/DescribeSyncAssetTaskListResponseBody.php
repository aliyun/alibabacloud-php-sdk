<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskListResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskListResponseBody\taskRecords;
use AlibabaCloud\Tea\Model;

class DescribeSyncAssetTaskListResponseBody extends Model
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
     * @example 24A20733-10A0-4AF6-BE6B-E3322413BB68
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IDC scan tasks.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskRecords) {
            $res['TaskRecords'] = [];
            if (null !== $this->taskRecords && \is_array($this->taskRecords)) {
                $n = 0;
                foreach ($this->taskRecords as $item) {
                    $res['TaskRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyncAssetTaskListResponseBody
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
        if (isset($map['TaskRecords'])) {
            if (!empty($map['TaskRecords'])) {
                $model->taskRecords = [];
                $n                  = 0;
                foreach ($map['TaskRecords'] as $item) {
                    $model->taskRecords[$n++] = null !== $item ? taskRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
