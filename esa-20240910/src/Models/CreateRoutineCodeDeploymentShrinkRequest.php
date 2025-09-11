<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateRoutineCodeDeploymentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $codeVersionsShrink;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'codeVersionsShrink' => 'CodeVersions',
        'env' => 'Env',
        'name' => 'Name',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeVersionsShrink) {
            $res['CodeVersions'] = $this->codeVersionsShrink;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
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
        if (isset($map['CodeVersions'])) {
            $model->codeVersionsShrink = $map['CodeVersions'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
