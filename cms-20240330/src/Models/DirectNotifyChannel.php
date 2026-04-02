<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DirectNotifyChannel extends Model
{
    /**
     * @var string[]
     */
    public $identifiers;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'identifiers' => 'identifiers',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->identifiers)) {
            Model::validateArray($this->identifiers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifiers) {
            if (\is_array($this->identifiers)) {
                $res['identifiers'] = [];
                $n1 = 0;
                foreach ($this->identifiers as $item1) {
                    $res['identifiers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['identifiers'])) {
            if (!empty($map['identifiers'])) {
                $model->identifiers = [];
                $n1 = 0;
                foreach ($map['identifiers'] as $item1) {
                    $model->identifiers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
