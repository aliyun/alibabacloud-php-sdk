<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class PublishRoutineCodeRevisionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $envsShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $selectCodeRevision;
    protected $_name = [
        'envsShrink' => 'Envs',
        'name' => 'Name',
        'selectCodeRevision' => 'SelectCodeRevision',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
