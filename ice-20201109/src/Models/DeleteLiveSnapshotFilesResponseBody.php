<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotFilesResponseBody\deleteFileResultList;
use AlibabaCloud\Tea\Model;

class DeleteLiveSnapshotFilesResponseBody extends Model
{
    /**
     * @var deleteFileResultList[]
     */
    public $deleteFileResultList;

    /**
     * @example ****2876-6263-4B75-8F2C-CD0F7FCF****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deleteFileResultList' => 'DeleteFileResultList',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteFileResultList) {
            $res['DeleteFileResultList'] = [];
            if (null !== $this->deleteFileResultList && \is_array($this->deleteFileResultList)) {
                $n = 0;
                foreach ($this->deleteFileResultList as $item) {
                    $res['DeleteFileResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveSnapshotFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteFileResultList'])) {
            if (!empty($map['DeleteFileResultList'])) {
                $model->deleteFileResultList = [];
                $n                           = 0;
                foreach ($map['DeleteFileResultList'] as $item) {
                    $model->deleteFileResultList[$n++] = null !== $item ? deleteFileResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
