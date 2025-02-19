<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;

class SubmitDocumentExtractJobRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $fileNameExtension;
    /**
     * @var string
     */
    public $fileUrl;
    /**
     * @var string
     */
    public $ossBucket;
    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'fileName'          => 'FileName',
        'fileNameExtension' => 'FileNameExtension',
        'fileUrl'           => 'FileUrl',
        'ossBucket'         => 'OssBucket',
        'ossEndpoint'       => 'OssEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileNameExtension) {
            $res['FileNameExtension'] = $this->fileNameExtension;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }

        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileNameExtension'])) {
            $model->fileNameExtension = $map['FileNameExtension'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }

        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}
