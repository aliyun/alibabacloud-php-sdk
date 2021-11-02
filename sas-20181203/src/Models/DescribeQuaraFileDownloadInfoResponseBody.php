<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeQuaraFileDownloadInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $quaraFileId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tag;

    /**
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
