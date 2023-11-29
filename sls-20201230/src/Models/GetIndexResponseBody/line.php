<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetIndexResponseBody;

use AlibabaCloud\Tea\Model;

class line extends Model
{
    /**
     * @description Indicates whether case sensitivity is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $caseSensitive;

    /**
     * @description Indicates whether Chinese characters are included. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $chn;

    /**
     * @description The excluded fields.
     *
     * @var string[]
     */
    public $excludeKeys;

    /**
     * @description The included fields.
     *
     * @var string[]
     */
    public $includeKeys;

    /**
     * @description The delimiters.
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
