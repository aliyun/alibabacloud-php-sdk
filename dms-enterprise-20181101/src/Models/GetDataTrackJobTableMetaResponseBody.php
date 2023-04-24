<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackJobTableMetaResponseBody\tableMetaList;
use AlibabaCloud\Tea\Model;

class GetDataTrackJobTableMetaResponseBody extends Model
{
    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 0C1CB646-1DE4-4AD0-B4A4-7D47DD52E931
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var tableMetaList[]
     */
    public $tableMetaList;
    protected $_name = [
        'errorCode'     => 'ErrorCode',
        'errorMessage'  => 'ErrorMessage',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'tableMetaList' => 'TableMetaList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tableMetaList) {
            $res['TableMetaList'] = [];
            if (null !== $this->tableMetaList && \is_array($this->tableMetaList)) {
                $n = 0;
                foreach ($this->tableMetaList as $item) {
                    $res['TableMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataTrackJobTableMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TableMetaList'])) {
            if (!empty($map['TableMetaList'])) {
                $model->tableMetaList = [];
                $n                    = 0;
                foreach ($map['TableMetaList'] as $item) {
                    $model->tableMetaList[$n++] = null !== $item ? tableMetaList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
