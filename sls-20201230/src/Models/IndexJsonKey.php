<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class IndexJsonKey extends Model
{
    /**
     * @example myAlias
     *
     * @var string
     */
    public $alias;

    /**
     * @example true
     *
     * @var bool
     */
    public $caseSensitive;

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
    public $docValue;

    /**
     * @var string[]
     */
    public $token;

    /**
     * @description This parameter is required.
     *
     * @example text
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'alias'         => 'alias',
        'caseSensitive' => 'caseSensitive',
        'chn'           => 'chn',
        'docValue'      => 'doc_value',
        'token'         => 'token',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->caseSensitive) {
            $res['caseSensitive'] = $this->caseSensitive;
        }
        if (null !== $this->chn) {
            $res['chn'] = $this->chn;
        }
        if (null !== $this->docValue) {
            $res['doc_value'] = $this->docValue;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IndexJsonKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['caseSensitive'])) {
            $model->caseSensitive = $map['caseSensitive'];
        }
        if (isset($map['chn'])) {
            $model->chn = $map['chn'];
        }
        if (isset($map['doc_value'])) {
            $model->docValue = $map['doc_value'];
        }
        if (isset($map['token'])) {
            if (!empty($map['token'])) {
                $model->token = $map['token'];
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
