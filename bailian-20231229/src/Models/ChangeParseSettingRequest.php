<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ChangeParseSettingRequest\parserConfig;

class ChangeParseSettingRequest extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $parser;

    /**
     * @var parserConfig
     */
    public $parserConfig;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'fileType' => 'FileType',
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
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
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
