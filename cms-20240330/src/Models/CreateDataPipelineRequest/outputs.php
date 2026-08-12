<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineRequest\outputs\processors;

class outputs extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var processors[]
     */
    public $processors;
    protected $_name = [
        'name' => 'name',
        'processors' => 'processors',
    ];

    public function validate()
    {
        if (\is_array($this->processors)) {
            Model::validateArray($this->processors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->processors) {
            if (\is_array($this->processors)) {
                $res['processors'] = [];
                $n1 = 0;
                foreach ($this->processors as $item1) {
                    $res['processors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['processors'])) {
            if (!empty($map['processors'])) {
                $model->processors = [];
                $n1 = 0;
                foreach ($map['processors'] as $item1) {
                    $model->processors[$n1] = processors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
