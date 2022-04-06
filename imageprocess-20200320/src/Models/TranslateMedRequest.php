<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Tea\Model;

class TranslateMedRequest extends Model
{
    /**
     * @var string
     */
    public $fromLanguage;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $toLanguage;
    protected $_name = [
        'fromLanguage' => 'FromLanguage',
        'text'         => 'Text',
        'toLanguage'   => 'ToLanguage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromLanguage) {
            $res['FromLanguage'] = $this->fromLanguage;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->toLanguage) {
            $res['ToLanguage'] = $this->toLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TranslateMedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromLanguage'])) {
            $model->fromLanguage = $map['FromLanguage'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['ToLanguage'])) {
            $model->toLanguage = $map['ToLanguage'];
        }

        return $model;
    }
}
