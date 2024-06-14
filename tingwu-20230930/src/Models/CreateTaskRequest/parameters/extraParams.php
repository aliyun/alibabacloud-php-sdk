<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'domainEducationEnabled' => 'DomainEducationEnabled',
        'maxKeywords'            => 'MaxKeywords',
        'nfixEnabled'            => 'NfixEnabled',
        'ocrAuxiliaryEnabled'    => 'OcrAuxiliaryEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraParams
     */
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

        return $model;
    }
}
