<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class KeysValue extends Model
{
    /**
     * @description 大小写敏感
     *
     * @var bool
     */
    public $caseSensitive;

    /**
     * @description 包含中文
     *
     * @var bool
     */
    public $chn;

    /**
     * @description 字段的索引类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 别名
     *
     * @var string
     */
    public $alias;

    /**
     * @description 分词符列表。仅当type参数取值为text时，必须设置。
     *
     * @var string[]
     */
    public $token;

    /**
     * @description 开启统计
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
