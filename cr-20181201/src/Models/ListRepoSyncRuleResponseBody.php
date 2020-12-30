<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleResponseBody\syncRules;
use AlibabaCloud\Tea\Model;

class ListRepoSyncRuleResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var syncRules[]
     */
    public $syncRules;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'isSuccess'  => 'IsSuccess',
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'pageSize'   => 'PageSize',
        'syncRules'  => 'SyncRules',
        'pageNo'     => 'PageNo',
        'code'       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->syncRules) {
            $res['SyncRules'] = [];
            if (null !== $this->syncRules && \is_array($this->syncRules)) {
                $n = 0;
                foreach ($this->syncRules as $item) {
                    $res['SyncRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoSyncRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SyncRules'])) {
            if (!empty($map['SyncRules'])) {
                $model->syncRules = [];
                $n                = 0;
                foreach ($map['SyncRules'] as $item) {
                    $model->syncRules[$n++] = null !== $item ? syncRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
