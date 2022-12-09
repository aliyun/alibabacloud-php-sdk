<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class PublishRoutineCodeRevisionRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $envs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $selectCodeRevision;
    protected $_name = [
        'envs'               => 'Envs',
        'name'               => 'Name',
        'selectCodeRevision' => 'SelectCodeRevision',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
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
     * @return PublishRoutineCodeRevisionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
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
