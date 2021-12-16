<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $selectCodeRevision;
    protected $_name = [
        'envsShrink'         => 'Envs',
        'name'               => 'Name',
        'ownerId'            => 'OwnerId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SelectCodeRevision'])) {
            $model->selectCodeRevision = $map['SelectCodeRevision'];
        }

        return $model;
    }
}
