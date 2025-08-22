<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

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
        'envs' => 'Envs',
        'name' => 'Name',
        'selectCodeRevision' => 'SelectCodeRevision',
    ];

    public function validate()
    {
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                foreach ($this->envs as $key1 => $value1) {
                    $res['Envs'][$key1] = $value1;
                }
            }
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
            if (!empty($map['Envs'])) {
                $model->envs = [];
                foreach ($map['Envs'] as $key1 => $value1) {
                    $model->envs[$key1] = $value1;
                }
            }
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
