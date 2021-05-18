<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateResponseBody\data;

use AlibabaCloud\Tea\Model;

class translatedValues extends Model
{
    /**
     * @var string
     */
    public $keyTranslation;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueTranslation;
    protected $_name = [
        'keyTranslation'   => 'KeyTranslation',
        'key'              => 'Key',
        'value'            => 'Value',
        'valueTranslation' => 'ValueTranslation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyTranslation) {
            $res['KeyTranslation'] = $this->keyTranslation;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueTranslation) {
            $res['ValueTranslation'] = $this->valueTranslation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return translatedValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyTranslation'])) {
            $model->keyTranslation = $map['KeyTranslation'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueTranslation'])) {
            $model->valueTranslation = $map['ValueTranslation'];
        }

        return $model;
    }
}
