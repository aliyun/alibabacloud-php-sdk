<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class TemplateConfiguration extends Model
{
    /**
     * @var mixed[]
     */
    public $aonotations;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var mixed[]
     */
    public $tokens;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'aonotations' => 'aonotations',
        'id' => 'id',
        'lang' => 'lang',
        'tokens' => 'tokens',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->aonotations)) {
            Model::validateArray($this->aonotations);
        }
        if (\is_array($this->tokens)) {
            Model::validateArray($this->tokens);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aonotations) {
            if (\is_array($this->aonotations)) {
                $res['aonotations'] = [];
                foreach ($this->aonotations as $key1 => $value1) {
                    $res['aonotations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->tokens) {
            if (\is_array($this->tokens)) {
                $res['tokens'] = [];
                foreach ($this->tokens as $key1 => $value1) {
                    $res['tokens'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aonotations'])) {
            if (!empty($map['aonotations'])) {
                $model->aonotations = [];
                foreach ($map['aonotations'] as $key1 => $value1) {
                    $model->aonotations[$key1] = $value1;
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['tokens'])) {
            if (!empty($map['tokens'])) {
                $model->tokens = [];
                foreach ($map['tokens'] as $key1 => $value1) {
                    $model->tokens[$key1] = $value1;
                }
            }
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
