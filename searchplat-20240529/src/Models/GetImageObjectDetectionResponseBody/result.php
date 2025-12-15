<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageObjectDetectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageObjectDetectionResponseBody\result\objects;

class result extends Model
{
    /**
     * @var objects[]
     */
    public $objects;
    protected $_name = [
        'objects' => 'objects',
    ];

    public function validate()
    {
        if (\is_array($this->objects)) {
            Model::validateArray($this->objects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objects) {
            if (\is_array($this->objects)) {
                $res['objects'] = [];
                $n1 = 0;
                foreach ($this->objects as $item1) {
                    $res['objects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['objects'])) {
            if (!empty($map['objects'])) {
                $model->objects = [];
                $n1 = 0;
                foreach ($map['objects'] as $item1) {
                    $model->objects[$n1] = objects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
