<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList;

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
        if (\is_array($this->DDLPublishRecordList)) {
            Model::validateArray($this->DDLPublishRecordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DDLPublishRecordList) {
            if (\is_array($this->DDLPublishRecordList)) {
                $res['DDLPublishRecordList'] = [];
                $n1                          = 0;
                foreach ($this->DDLPublishRecordList as $item1) {
                    $res['DDLPublishRecordList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDLPublishRecordList'])) {
            if (!empty($map['DDLPublishRecordList'])) {
                $model->DDLPublishRecordList = [];
                $n1                          = 0;
                foreach ($map['DDLPublishRecordList'] as $item1) {
                    $model->DDLPublishRecordList[$n1++] = DDLPublishRecordList::fromMap($item1);
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
