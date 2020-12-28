<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableFileSystemTypesResponseBody\fileSystemTypeList;
use AlibabaCloud\Tea\Model;

class ListAvailableFileSystemTypesResponseBody extends Model
{
    /**
     * @var fileSystemTypeList[]
     */
    public $fileSystemTypeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileSystemTypeList' => 'FileSystemTypeList',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemTypeList) {
            $res['FileSystemTypeList'] = [];
            if (null !== $this->fileSystemTypeList && \is_array($this->fileSystemTypeList)) {
                $n = 0;
                foreach ($this->fileSystemTypeList as $item) {
                    $res['FileSystemTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAvailableFileSystemTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemTypeList'])) {
            if (!empty($map['FileSystemTypeList'])) {
                $model->fileSystemTypeList = [];
                $n                         = 0;
                foreach ($map['FileSystemTypeList'] as $item) {
                    $model->fileSystemTypeList[$n++] = null !== $item ? fileSystemTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
