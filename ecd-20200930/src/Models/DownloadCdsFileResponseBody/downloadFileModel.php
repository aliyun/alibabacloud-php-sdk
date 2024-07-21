<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DownloadCdsFileResponseBody;

use AlibabaCloud\Tea\Model;

class downloadFileModel extends Model
{
    /**
     * @var string
     */
    public $downloadType;

    /**
     * @example https://pds-XXXX-bj-1693807057.oss-cn-beijing.aliyuncs.com/A0SKfLOp%2F2%2F6662612e0570fb2bdd5549759716d433439f0572%2F6662612ee3804e4901794928b14f9a7477640ee7?di=XXXX&dr=1030&f=667d5a322ebf7409e91c485d808fb3bd8a73efbb&response-content-disposition=attachment%3B%20
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $expirationSecond;

    /**
     * @example 2024-07-18T02:55:49.795Z
     *
     * @var string
     */
    public $expirationTime;

    /**
     * @example 667d5a322ebf7409e91c485d808fb3bd8a73efbb
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 1594642
     *
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'downloadType'     => 'DownloadType',
        'downloadUrl'      => 'DownloadUrl',
        'expirationSecond' => 'ExpirationSecond',
        'expirationTime'   => 'ExpirationTime',
        'fileId'           => 'FileId',
        'size'             => 'Size',
        'streamUrl'        => 'StreamUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadType) {
            $res['DownloadType'] = $this->downloadType;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->expirationSecond) {
            $res['ExpirationSecond'] = $this->expirationSecond;
        }
        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downloadFileModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadType'])) {
            $model->downloadType = $map['DownloadType'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ExpirationSecond'])) {
            $model->expirationSecond = $map['ExpirationSecond'];
        }
        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
