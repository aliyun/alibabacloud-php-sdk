<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class ScaleServiceRequest extends Model
{
    /**
     * @var int
     */
    public $instance;

    /**
     * @var string[]
     */
    public $instancesToDelete;
    protected $_name = [
        'instance' => 'Instance',
        'instancesToDelete' => 'InstancesToDelete',
    ];

    public function validate()
    {
        if (\is_array($this->instancesToDelete)) {
            Model::validateArray($this->instancesToDelete);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }

        if (null !== $this->instancesToDelete) {
            if (\is_array($this->instancesToDelete)) {
                $res['InstancesToDelete'] = [];
                $n1 = 0;
                foreach ($this->instancesToDelete as $item1) {
                    $res['InstancesToDelete'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }

        if (isset($map['InstancesToDelete'])) {
            if (!empty($map['InstancesToDelete'])) {
                $model->instancesToDelete = [];
                $n1 = 0;
                foreach ($map['InstancesToDelete'] as $item1) {
                    $model->instancesToDelete[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
