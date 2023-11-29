<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class KeysValue extends Model
{
    /**
     * @description Specifies whether to enable case sensitivity. This parameter is required only when **type** is set to **text**. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $caseSensitive;

    /**
     * @description Specifies whether to include Chinese characters. This parameter is required only when **type** is set to **text**. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $chn;

    /**
     * @description The data type of the field value. Valid values: text, json, double, and long.
     *
     * @example text
     *
     * @var string
     */
    public $type;

    /**
     * @description The alias of the field.
     *
     * @example myAlias
     *
     * @var string
     */
    public $alias;

    /**
     * @description The delimiters that are used to split text.
     *
     * @var string[]
     */
    public $token;

    /**
     * @description Specifies whether to turn on Enable Analytics for the field.
     *
     * @example false
     *
     * @var bool
     */
    public $docValue;
    protected $_name = [
        'caseSensitive' => 'caseSensitive',
        'chn'           => 'chn',
        'type'          => 'type',
        'alias'         => 'alias',
        'token'         => 'token',
        'docValue'      => 'doc_value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseSensitive) {
            $res['caseSensitive'] = $this->caseSensitive;
        }
        if (null !== $this->chn) {
            $res['chn'] = $this->chn;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->docValue) {
            $res['doc_value'] = $this->docValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KeysValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['caseSensitive'])) {
            $model->caseSensitive = $map['caseSensitive'];
        }
        if (isset($map['chn'])) {
            $model->chn = $map['chn'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['token'])) {
            if (!empty($map['token'])) {
                $model->token = $map['token'];
            }
        }
        if (isset($map['doc_value'])) {
            $model->docValue = $map['doc_value'];
        }

        return $model;
    }
}
