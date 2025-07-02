<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class ListFbIssueLabelsByLCRequest extends Model
{
    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $languageType;
    protected $_name = [
        'caller' => 'Caller',
        'languageType' => 'LanguageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->languageType) {
            $res['LanguageType'] = $this->languageType;
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
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['LanguageType'])) {
            $model->languageType = $map['LanguageType'];
        }

        return $model;
    }
}
