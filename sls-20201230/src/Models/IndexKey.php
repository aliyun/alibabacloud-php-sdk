<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class IndexKey extends Model
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
     * @example true
     *
     * @var bool
     */
    public $indexAll;

    /**
     * @var IndexJsonKey[]
     */
    public $jsonKeys;

    /**
     * @var int
     */
    public $maxDepth;

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
        'indexAll'      => 'index_all',
        'jsonKeys'      => 'json_keys',
        'maxDepth'      => 'max_depth',
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
        if (null !== $this->indexAll) {
            $res['index_all'] = $this->indexAll;
        }
        if (null !== $this->jsonKeys) {
            $res['json_keys'] = [];
            if (null !== $this->jsonKeys && \is_array($this->jsonKeys)) {
                foreach ($this->jsonKeys as $key => $val) {
                    $res['json_keys'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->maxDepth) {
            $res['max_depth'] = $this->maxDepth;
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
     * @return IndexKey
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
        if (isset($map['index_all'])) {
            $model->indexAll = $map['index_all'];
        }
        if (isset($map['json_keys'])) {
            $model->jsonKeys = $map['json_keys'];
        }
        if (isset($map['max_depth'])) {
            $model->maxDepth = $map['max_depth'];
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
