<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DownloadCdsFileResponseBody;

use AlibabaCloud\Dara\Model;

class downloadFileModel extends Model
{
    /**
     * @var string
     */
    public $downloadType;
    /**
     * @var string
     */
    public $downloadUrl;
    /**
     * @var string
     */
    public $expirationSecond;
    /**
     * @var string
     */
    public $expirationTime;
    /**
     * @var string
     */
    public $fileId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
