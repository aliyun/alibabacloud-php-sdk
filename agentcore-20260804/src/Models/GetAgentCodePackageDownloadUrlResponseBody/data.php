<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageDownloadUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $crc64;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $etag;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $resourceVersionId;
    protected $_name = [
        'crc64' => 'crc64',
        'downloadUrl' => 'downloadUrl',
        'etag' => 'etag',
        'expiresAt' => 'expiresAt',
        'fileName' => 'fileName',
        'fileSize' => 'fileSize',
        'format' => 'format',
        'resourceVersionId' => 'resourceVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crc64) {
            $res['crc64'] = $this->crc64;
        }

        if (null !== $this->downloadUrl) {
            $res['downloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->etag) {
            $res['etag'] = $this->etag;
        }

        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->resourceVersionId) {
            $res['resourceVersionId'] = $this->resourceVersionId;
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
        if (isset($map['crc64'])) {
            $model->crc64 = $map['crc64'];
        }

        if (isset($map['downloadUrl'])) {
            $model->downloadUrl = $map['downloadUrl'];
        }

        if (isset($map['etag'])) {
            $model->etag = $map['etag'];
        }

        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['resourceVersionId'])) {
            $model->resourceVersionId = $map['resourceVersionId'];
        }

        return $model;
    }
}
