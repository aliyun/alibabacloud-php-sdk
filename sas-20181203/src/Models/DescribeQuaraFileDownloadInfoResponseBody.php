<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeQuaraFileDownloadInfoResponseBody extends Model
{
    /**
     * @description The URL that is used to download the file. The URL is valid for five minutes.
     *
     * @example https://xxxxxxxx.oss-cn-hangzhou-1.aliyuncs.com/xxxxx/xxxxxxxxxxxxxx?Expires=1671448125&OSSAccessKeyId=xxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The MD5 hash value of the quarantined file.
     *
     * @example bb62ef1311bc564377a0378d3axxxxxx
     *
     * @var string
     */
    public $md5;

    /**
     * @description The file path.
     *
     * @example /etc/test
     *
     * @var string
     */
    public $path;

    /**
     * @description The ID of the quarantined file.
     *
     * @example 123
     *
     * @var int
     */
    public $quaraFileId;

    /**
     * @description The ID of the request.
     *
     * @example 29874225-EAAC-5415-8501-32DD20FXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tag that is added to the related alert.
     *
     * @example 6d4ff40a22b15c86adecf2aa48xxxxx
     *
     * @var string
     */
    public $tag;

    /**
     * @description The UUID of the server.
     *
     * @example 4fe8e1cd-3c37-4851-b9de-124da32c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
        'md5'         => 'Md5',
        'path'        => 'Path',
        'quaraFileId' => 'QuaraFileId',
        'requestId'   => 'RequestId',
        'tag'         => 'Tag',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->quaraFileId) {
            $res['QuaraFileId'] = $this->quaraFileId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQuaraFileDownloadInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['QuaraFileId'])) {
            $model->quaraFileId = $map['QuaraFileId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
