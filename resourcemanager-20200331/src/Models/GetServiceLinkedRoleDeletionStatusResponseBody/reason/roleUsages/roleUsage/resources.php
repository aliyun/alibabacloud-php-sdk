<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason\roleUsages\roleUsage;

use AlibabaCloud\Dara\Model;

class resources extends Model
{
    /**
     * @var string[]
     */
    public $resource;
    protected $_name = [
        'resource' => 'Resource',
    ];

    public function validate()
    {
        if (\is_array($this->resource)) {
            Model::validateArray($this->resource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resource) {
            if (\is_array($this->resource)) {
                $res['Resource'] = [];
                $n1              = 0;
                foreach ($this->resource as $item1) {
                    $res['Resource'][$n1++] = $item1;
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
        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = [];
                $n1              = 0;
                foreach ($map['Resource'] as $item1) {
                    $model->resource[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
