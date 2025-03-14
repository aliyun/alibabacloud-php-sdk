<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNAFilesResponseBody\fileList;
use AlibabaCloud\Tea\Model;

class ListDNAFilesResponseBody extends Model
{
    /**
     * @description The queried files.
     *
     * @var fileList[]
     */
    public $fileList;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example ae0fd49c0840e14daf0d66a75b83****
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description The request ID.
     *
     * @example 2AE89FA5-E620-56C7-9B80-75D09757385A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileList' => 'FileList',
        'nextPageToken' => 'NextPageToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileList) {
            $res['FileList'] = [];
            if (null !== $this->fileList && \is_array($this->fileList)) {
                $n = 0;
                foreach ($this->fileList as $item) {
                    $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDNAFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n = 0;
                foreach ($map['FileList'] as $item) {
                    $model->fileList[$n++] = null !== $item ? fileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
