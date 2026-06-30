<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class UploadTranslationFileAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $APIKey;

    /**
     * @var Stream
     */
    public $fileObject;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'APIKey' => 'APIKey',
        'fileObject' => 'File',
        'fileName' => 'FileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APIKey) {
            $res['APIKey'] = $this->APIKey;
        }

        if (null !== $this->fileObject) {
            $res['File'] = $this->fileObject;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
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
        if (isset($map['APIKey'])) {
            $model->APIKey = $map['APIKey'];
        }

        if (isset($map['File'])) {
            $model->fileObject = $map['File'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        return $model;
    }
}
