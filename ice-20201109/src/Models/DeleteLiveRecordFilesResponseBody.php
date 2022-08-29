<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordFilesResponseBody\deleteFileInfoList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteFileInfoList) {
            $res['DeleteFileInfoList'] = [];
            if (null !== $this->deleteFileInfoList && \is_array($this->deleteFileInfoList)) {
                $n = 0;
                foreach ($this->deleteFileInfoList as $item) {
                    $res['DeleteFileInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DeleteLiveRecordFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteFileInfoList'])) {
            if (!empty($map['DeleteFileInfoList'])) {
                $model->deleteFileInfoList = [];
                $n                         = 0;
                foreach ($map['DeleteFileInfoList'] as $item) {
                    $model->deleteFileInfoList[$n++] = null !== $item ? deleteFileInfoList::fromMap($item) : $item;
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
