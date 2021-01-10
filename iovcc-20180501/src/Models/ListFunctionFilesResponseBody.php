<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesResponseBody\fileList;
use AlibabaCloud\Tea\Model;

class ListFunctionFilesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var fileList
     */
    public $fileList;
    protected $_name = [
        'requestId' => 'RequestId',
        'fileList'  => 'FileList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->fileList) {
            $res['FileList'] = null !== $this->fileList ? $this->fileList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FileList'])) {
            $model->fileList = fileList::fromMap($map['FileList']);
        }

        return $model;
    }
}
