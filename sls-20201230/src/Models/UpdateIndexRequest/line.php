<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexRequest;

use AlibabaCloud\Tea\Model;

class line extends Model
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
     * @description 排除的字段列表，不能与include_keys同时指定。
     *
     * @var string[]
     */
    public $excludeKeys;

    /**
     * @description 包含的字段列表，不能与exclude_keys同时指定。
     *
     * @var string[]
     */
    public $includeKeys;

    /**
     * @description 分词符列表。可以设置一个分词参数，指定这个字段按照哪一种方式分词。
     *
     * @var string[]
     */
    public $token;
    protected $_name = [
        'caseSensitive' => 'caseSensitive',
        'chn'           => 'chn',
        'excludeKeys'   => 'exclude_keys',
        'includeKeys'   => 'include_keys',
        'token'         => 'token',
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
        if (null !== $this->excludeKeys) {
            $res['exclude_keys'] = $this->excludeKeys;
        }
        if (null !== $this->includeKeys) {
            $res['include_keys'] = $this->includeKeys;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return line
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
        if (isset($map['exclude_keys'])) {
            if (!empty($map['exclude_keys'])) {
                $model->excludeKeys = $map['exclude_keys'];
            }
        }
        if (isset($map['include_keys'])) {
            if (!empty($map['include_keys'])) {
                $model->includeKeys = $map['include_keys'];
            }
        }
        if (isset($map['token'])) {
            if (!empty($map['token'])) {
                $model->token = $map['token'];
            }
        }

        return $model;
    }
}
