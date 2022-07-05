<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\Config\inputDetail;

use AlibabaCloud\Tea\Model;

class sensitiveKeys extends Model
{
    /**
     * @description all
     *
     * @var bool
     */
    public $all;

    /**
     * @description key
     *
     * @var string
     */
    public $key;

    /**
     * @description regex_begin
     *
     * @var string
     */
    public $regexBegin;

    /**
     * @description regex_content
     *
     * @var string
     */
    public $regexContent;

    /**
     * @description type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'all'          => 'all',
        'key'          => 'key',
        'regexBegin'   => 'regex_begin',
        'regexContent' => 'regex_content',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->regexBegin) {
            $res['regex_begin'] = $this->regexBegin;
        }
        if (null !== $this->regexContent) {
            $res['regex_content'] = $this->regexContent;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['regex_begin'])) {
            $model->regexBegin = $map['regex_begin'];
        }
        if (isset($map['regex_content'])) {
            $model->regexContent = $map['regex_content'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
