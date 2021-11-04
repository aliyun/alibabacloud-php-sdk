<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList;
use AlibabaCloud\Tea\Model;

class ListDDLPublishRecordsResponseBody extends Model
{
    /**
     * @var DDLPublishRecordList[]
     */
    public $DDLPublishRecordList;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'DDLPublishRecordList' => 'DDLPublishRecordList',
        'errorCode'            => 'ErrorCode',
        'errorMessage'         => 'ErrorMessage',
        'requestId'            => 'RequestId',
        'success'              => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DDLPublishRecordList) {
            $res['DDLPublishRecordList'] = [];
            if (null !== $this->DDLPublishRecordList && \is_array($this->DDLPublishRecordList)) {
                $n = 0;
                foreach ($this->DDLPublishRecordList as $item) {
                    $res['DDLPublishRecordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDDLPublishRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDLPublishRecordList'])) {
            if (!empty($map['DDLPublishRecordList'])) {
                $model->DDLPublishRecordList = [];
                $n                           = 0;
                foreach ($map['DDLPublishRecordList'] as $item) {
                    $model->DDLPublishRecordList[$n++] = null !== $item ? DDLPublishRecordList::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
