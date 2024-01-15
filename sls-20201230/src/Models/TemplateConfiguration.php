<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class TemplateConfiguration extends Model
{
    /**
     * @var mixed[]
     */
    public $aonotations;

    /**
     * @example sls.app.ack.ip.not_enough
     *
     * @var string
     */
    public $id;

    /**
     * @example cn
     *
     * @var string
     */
    public $lang;

    /**
     * @var mixed[]
     */
    public $tokens;

    /**
     * @example sys
     *
     * @var string
     */
    public $type;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'aonotations' => 'aonotations',
        'id'          => 'id',
        'lang'        => 'lang',
        'tokens'      => 'tokens',
        'type'        => 'type',
        'version'     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aonotations) {
            $res['aonotations'] = $this->aonotations;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }
        if (null !== $this->tokens) {
            $res['tokens'] = $this->tokens;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TemplateConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aonotations'])) {
            $model->aonotations = $map['aonotations'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }
        if (isset($map['tokens'])) {
            $model->tokens = $map['tokens'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
