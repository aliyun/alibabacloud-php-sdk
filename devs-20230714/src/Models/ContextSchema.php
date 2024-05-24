<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ContextSchema extends Model
{
    /**
     * @example [git](https://git-scm.com/) address for [git clone](https://git-scm.com/docs/git-clone).
     *
     * @var string
     */
    public $description;

    /**
     * @example git@gitlab.alibaba-inc.com:serverless/lambda.git
     *
     * @var string
     */
    public $hint;

    /**
     * @example gitRepoUrl
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $required;

    /**
     * @example string
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'description',
        'hint'        => 'hint',
        'name'        => 'name',
        'required'    => 'required',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->hint) {
            $res['hint'] = $this->hint;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContextSchema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['hint'])) {
            $model->hint = $map['hint'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
