<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\GetParseSettingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetParseSettingsResponseBody\data\parserConfig;

class data extends Model
{
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

    /**
     * @var string
     */
    public $parserDisplayName;
    protected $_name = [
        'fileType' => 'FileType',
        'parser' => 'Parser',
        'parserConfig' => 'ParserConfig',
        'parserDisplayName' => 'ParserDisplayName',
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
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->parser) {
            $res['Parser'] = $this->parser;
        }

        if (null !== $this->parserConfig) {
            $res['ParserConfig'] = null !== $this->parserConfig ? $this->parserConfig->toArray($noStream) : $this->parserConfig;
        }

        if (null !== $this->parserDisplayName) {
            $res['ParserDisplayName'] = $this->parserDisplayName;
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
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['Parser'])) {
            $model->parser = $map['Parser'];
        }

        if (isset($map['ParserConfig'])) {
            $model->parserConfig = parserConfig::fromMap($map['ParserConfig']);
        }

        if (isset($map['ParserDisplayName'])) {
            $model->parserDisplayName = $map['ParserDisplayName'];
        }

        return $model;
    }
}
