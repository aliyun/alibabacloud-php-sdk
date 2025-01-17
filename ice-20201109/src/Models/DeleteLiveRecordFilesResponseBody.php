<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordFilesResponseBody\deleteFileInfoList;

class DeleteLiveRecordFilesResponseBody extends Model
{
    /**
     * @var deleteFileInfoList[]
     */
    public $deleteFileInfoList;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deleteFileInfoList' => 'DeleteFileInfoList',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->deleteFileInfoList)) {
            Model::validateArray($this->deleteFileInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteFileInfoList) {
            if (\is_array($this->deleteFileInfoList)) {
                $res['DeleteFileInfoList'] = [];
                $n1                        = 0;
                foreach ($this->deleteFileInfoList as $item1) {
                    $res['DeleteFileInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['DeleteFileInfoList'])) {
            if (!empty($map['DeleteFileInfoList'])) {
                $model->deleteFileInfoList = [];
                $n1                        = 0;
                foreach ($map['DeleteFileInfoList'] as $item1) {
                    $model->deleteFileInfoList[$n1++] = deleteFileInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
