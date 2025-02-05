<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Dara\Model;

class extraParams extends Model
{
    /**
     * @var bool
     */
    public $domainEducationEnabled;
    /**
     * @var int
     */
    public $maxKeywords;
    /**
     * @var bool
     */
    public $nfixEnabled;
    /**
     * @var bool
     */
    public $ocrAuxiliaryEnabled;
    /**
     * @var bool
     */
    public $translateLlmSceneEnabled;
    protected $_name = [
        'domainEducationEnabled'   => 'DomainEducationEnabled',
        'maxKeywords'              => 'MaxKeywords',
        'nfixEnabled'              => 'NfixEnabled',
        'ocrAuxiliaryEnabled'      => 'OcrAuxiliaryEnabled',
        'translateLlmSceneEnabled' => 'TranslateLlmSceneEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainEducationEnabled) {
            $res['DomainEducationEnabled'] = $this->domainEducationEnabled;
        }

        if (null !== $this->maxKeywords) {
            $res['MaxKeywords'] = $this->maxKeywords;
        }

        if (null !== $this->nfixEnabled) {
            $res['NfixEnabled'] = $this->nfixEnabled;
        }

        if (null !== $this->ocrAuxiliaryEnabled) {
            $res['OcrAuxiliaryEnabled'] = $this->ocrAuxiliaryEnabled;
        }

        if (null !== $this->translateLlmSceneEnabled) {
            $res['TranslateLlmSceneEnabled'] = $this->translateLlmSceneEnabled;
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
        if (isset($map['DomainEducationEnabled'])) {
            $model->domainEducationEnabled = $map['DomainEducationEnabled'];
        }

        if (isset($map['MaxKeywords'])) {
            $model->maxKeywords = $map['MaxKeywords'];
        }

        if (isset($map['NfixEnabled'])) {
            $model->nfixEnabled = $map['NfixEnabled'];
        }

        if (isset($map['OcrAuxiliaryEnabled'])) {
            $model->ocrAuxiliaryEnabled = $map['OcrAuxiliaryEnabled'];
        }

        if (isset($map['TranslateLlmSceneEnabled'])) {
            $model->translateLlmSceneEnabled = $map['TranslateLlmSceneEnabled'];
        }

        return $model;
    }
}
