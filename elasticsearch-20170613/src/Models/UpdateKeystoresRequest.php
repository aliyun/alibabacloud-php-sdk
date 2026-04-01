<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class UpdateKeystoresRequest extends Model
{
    /**
     * @var string[]
     */
    public $remove;

    /**
     * @var string[]
     */
    public $update;

    /**
     * @var string
     */
    public $force;
    protected $_name = [
        'remove' => 'remove',
        'update' => 'update',
        'force' => 'force',
    ];

    public function validate()
    {
        if (\is_array($this->remove)) {
            Model::validateArray($this->remove);
        }
        if (\is_array($this->update)) {
            Model::validateArray($this->update);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remove) {
            if (\is_array($this->remove)) {
                $res['remove'] = [];
                $n1 = 0;
                foreach ($this->remove as $item1) {
                    $res['remove'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->update) {
            if (\is_array($this->update)) {
                $res['update'] = [];
                foreach ($this->update as $key1 => $value1) {
                    $res['update'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->force) {
            $res['force'] = $this->force;
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
        if (isset($map['remove'])) {
            if (!empty($map['remove'])) {
                $model->remove = [];
                $n1 = 0;
                foreach ($map['remove'] as $item1) {
                    $model->remove[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['update'])) {
            if (!empty($map['update'])) {
                $model->update = [];
                foreach ($map['update'] as $key1 => $value1) {
                    $model->update[$key1] = $value1;
                }
            }
        }

        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        return $model;
    }
}
