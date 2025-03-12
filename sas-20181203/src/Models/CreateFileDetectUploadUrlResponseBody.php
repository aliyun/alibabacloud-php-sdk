<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponseBody\uploadUrlList;
use AlibabaCloud\Tea\Model;

class CreateFileDetectUploadUrlResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 09969D2C-4FAD-429E-BFBF-9A60DEF8BF6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array consisting of the parameters that are required to upload a file.
     *
     * @var uploadUrlList[]
     */
    public $uploadUrlList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'uploadUrlList' => 'UploadUrlList',
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
        if (null !== $this->uploadUrlList) {
            $res['UploadUrlList'] = [];
            if (null !== $this->uploadUrlList && \is_array($this->uploadUrlList)) {
                $n = 0;
                foreach ($this->uploadUrlList as $item) {
                    $res['UploadUrlList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileDetectUploadUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadUrlList'])) {
            if (!empty($map['UploadUrlList'])) {
                $model->uploadUrlList = [];
                $n                    = 0;
                foreach ($map['UploadUrlList'] as $item) {
                    $model->uploadUrlList[$n++] = null !== $item ? uploadUrlList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
