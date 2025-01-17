<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotFilesResponseBody\deleteFileResultList;

class DeleteLiveSnapshotFilesResponseBody extends Model
{
    /**
     * @var deleteFileResultList[]
     */
    public $deleteFileResultList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deleteFileResultList' => 'DeleteFileResultList',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->deleteFileResultList)) {
            Model::validateArray($this->deleteFileResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteFileResultList) {
            if (\is_array($this->deleteFileResultList)) {
                $res['DeleteFileResultList'] = [];
                $n1                          = 0;
                foreach ($this->deleteFileResultList as $item1) {
                    $res['DeleteFileResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DeleteFileResultList'])) {
            if (!empty($map['DeleteFileResultList'])) {
                $model->deleteFileResultList = [];
                $n1                          = 0;
                foreach ($map['DeleteFileResultList'] as $item1) {
                    $model->deleteFileResultList[$n1++] = deleteFileResultList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
