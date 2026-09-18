<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models;

use AlibabaCloud\Dara\Model;

class CreateScanSbomExportResponseBody extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sha256;

    /**
     * @var int
     */
    public $sizeBytes;
    protected $_name = [
        'downloadUrl' => 'downloadUrl',
        'fileName' => 'fileName',
        'format' => 'format',
        'mediaType' => 'mediaType',
        'requestId' => 'requestId',
        'sha256' => 'sha256',
        'sizeBytes' => 'sizeBytes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['downloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->mediaType) {
            $res['mediaType'] = $this->mediaType;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sha256) {
            $res['sha256'] = $this->sha256;
        }

        if (null !== $this->sizeBytes) {
            $res['sizeBytes'] = $this->sizeBytes;
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
        if (isset($map['downloadUrl'])) {
            $model->downloadUrl = $map['downloadUrl'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['mediaType'])) {
            $model->mediaType = $map['mediaType'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sha256'])) {
            $model->sha256 = $map['sha256'];
        }

        if (isset($map['sizeBytes'])) {
            $model->sizeBytes = $map['sizeBytes'];
        }

        return $model;
    }
}
