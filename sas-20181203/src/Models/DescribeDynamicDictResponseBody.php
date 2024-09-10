<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDynamicDictResponseBody extends Model
{
    /**
     * @description The number of weak password rules that are added.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the OSS object that contains custom weak passwords.
     *
     * @example test_dict.plain
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The size of the OSS object. Unit: bytes.
     *
     * @example 40
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The maximum number of weak password rules that can be added.
     *
     * @example 9
     *
     * @var int
     */
    public $limit;

    /**
     * @description The IP address of the Object Storage Service (OSS) object.
     *
     * @example cloudtest01/661767e1-5ae3-4ec5-865f-03039436893a/sacc2*****
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @description The request ID.
     *
     * @example A3D7C47D-3F11-57BB-90E8-E5C20C61****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timestamp when the OSS object was uploaded. Unit: milliseconds.
     *
     * @example 1719919421
     *
     * @var int
     */
    public $uploadTime;
    protected $_name = [
        'count'      => 'Count',
        'fileName'   => 'FileName',
        'fileSize'   => 'FileSize',
        'limit'      => 'Limit',
        'ossUrl'     => 'OssUrl',
        'requestId'  => 'RequestId',
        'uploadTime' => 'UploadTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDynamicDictResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
