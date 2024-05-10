<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CreateIndexRequest;

use AlibabaCloud\Tea\Model;

class line extends Model
{
    /**
     * @description Specifies whether to enable case sensitivity. Valid values:
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
     * @description Specifies whether to include Chinese characters. Valid values:
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
     * @description The excluded fields. You cannot specify both include_keys and exclude_keys.
     *
     * @var string[]
     */
    public $excludeKeys;

    /**
     * @description The included fields. You cannot specify both include_keys and exclude_keys.
     *
     * @var string[]
     */
    public $includeKeys;

    /**
     * @description The delimiters. You can specify a delimiter to delimit the content of a field value. For more information about delimiters, see Example.
     *
     * This parameter is required.
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
