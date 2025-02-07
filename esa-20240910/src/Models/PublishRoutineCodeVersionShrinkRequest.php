<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class PublishRoutineCodeVersionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $canaryAreaListShrink;
    /**
     * @var string
     */
    public $canaryCodeVersion;
    /**
     * @var string
     */
    public $codeVersion;
    /**
     * @var string
     */
    public $env;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'canaryAreaListShrink' => 'CanaryAreaList',
        'canaryCodeVersion'    => 'CanaryCodeVersion',
        'codeVersion'          => 'CodeVersion',
        'env'                  => 'Env',
        'name'                 => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canaryAreaListShrink) {
            $res['CanaryAreaList'] = $this->canaryAreaListShrink;
        }

        if (null !== $this->canaryCodeVersion) {
            $res['CanaryCodeVersion'] = $this->canaryCodeVersion;
        }

        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CanaryAreaList'])) {
            $model->canaryAreaListShrink = $map['CanaryAreaList'];
        }

        if (isset($map['CanaryCodeVersion'])) {
            $model->canaryCodeVersion = $map['CanaryCodeVersion'];
        }

        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
