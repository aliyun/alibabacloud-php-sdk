<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class PublishRoutineCodeRevisionShrinkRequest extends Model
{
    /**
     * @example ["Production","Preset_Canary_Zhejiang"]
     *
     * @var string
     */
    public $envsShrink;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 1620876959997924701
     *
     * @var string
     */
    public $selectCodeRevision;
    protected $_name = [
        'envsShrink'         => 'Envs',
        'name'               => 'Name',
        'selectCodeRevision' => 'SelectCodeRevision',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envsShrink) {
            $res['Envs'] = $this->envsShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->selectCodeRevision) {
            $res['SelectCodeRevision'] = $this->selectCodeRevision;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishRoutineCodeRevisionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Envs'])) {
            $model->envsShrink = $map['Envs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SelectCodeRevision'])) {
            $model->selectCodeRevision = $map['SelectCodeRevision'];
        }

        return $model;
    }
}
