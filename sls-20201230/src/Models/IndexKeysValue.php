<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class IndexKeysValue extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $chn;

    /**
     * @example true
     *
     * @var bool
     */
    public $caseSensitive;

    /**
     * @var string[]
     */
    public $token;

    /**
     * @example myAlias
     *
     * @var string
     */
    public $alias;

    /**
     * @description This parameter is required.
     *
     * @example text
     *
     * @var string
     */
    public $type;

    /**
     * @example true
     *
     * @var bool
     */
    public $docValue;
    protected $_name = [
        'chn'           => 'chn',
        'caseSensitive' => 'caseSensitive',
        'token'         => 'token',
        'alias'         => 'alias',
        'type'          => 'type',
        'docValue'      => 'doc_value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chn) {
            $res['chn'] = $this->chn;
        }
        if (null !== $this->caseSensitive) {
            $res['caseSensitive'] = $this->caseSensitive;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->docValue) {
            $res['doc_value'] = $this->docValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IndexKeysValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chn'])) {
            $model->chn = $map['chn'];
        }
        if (isset($map['caseSensitive'])) {
            $model->caseSensitive = $map['caseSensitive'];
        }
        if (isset($map['token'])) {
            if (!empty($map['token'])) {
                $model->token = $map['token'];
            }
        }
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['doc_value'])) {
            $model->docValue = $map['doc_value'];
        }

        return $model;
    }
}
