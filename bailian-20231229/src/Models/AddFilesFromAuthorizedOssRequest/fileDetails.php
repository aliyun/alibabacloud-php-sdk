<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssRequest\fileDetails\parserConfig;

class fileDetails extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $parser;

    /**
     * @var parserConfig
     */
    public $parserConfig;
    protected $_name = [
        'fileName' => 'FileName',
        'ossKey' => 'OssKey',
        'parser' => 'Parser',
        'parserConfig' => 'ParserConfig',
    ];

    public function validate()
    {
        if (null !== $this->parserConfig) {
            $this->parserConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->parser) {
            $res['Parser'] = $this->parser;
        }

        if (null !== $this->parserConfig) {
            $res['ParserConfig'] = null !== $this->parserConfig ? $this->parserConfig->toArray($noStream) : $this->parserConfig;
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

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['Parser'])) {
            $model->parser = $map['Parser'];
        }

        if (isset($map['ParserConfig'])) {
            $model->parserConfig = parserConfig::fromMap($map['ParserConfig']);
        }

        return $model;
    }
}
