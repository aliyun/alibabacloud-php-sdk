<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class BindingPolicy extends Model
{
    /**
     * @var string[]
     */
    public $excludeNodes;

    /**
     * @var string[]
     */
    public $includeNodes;

    /**
     * @var int
     */
    public $nodeSpecCount;
    protected $_name = [
        'excludeNodes' => 'ExcludeNodes',
        'includeNodes' => 'IncludeNodes',
        'nodeSpecCount' => 'NodeSpecCount',
    ];

    public function validate()
    {
        if (\is_array($this->excludeNodes)) {
            Model::validateArray($this->excludeNodes);
        }
        if (\is_array($this->includeNodes)) {
            Model::validateArray($this->includeNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeNodes) {
            if (\is_array($this->excludeNodes)) {
                $res['ExcludeNodes'] = [];
                $n1 = 0;
                foreach ($this->excludeNodes as $item1) {
                    $res['ExcludeNodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->includeNodes) {
            if (\is_array($this->includeNodes)) {
                $res['IncludeNodes'] = [];
                $n1 = 0;
                foreach ($this->includeNodes as $item1) {
                    $res['IncludeNodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodeSpecCount) {
            $res['NodeSpecCount'] = $this->nodeSpecCount;
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
        if (isset($map['ExcludeNodes'])) {
            if (!empty($map['ExcludeNodes'])) {
                $model->excludeNodes = [];
                $n1 = 0;
                foreach ($map['ExcludeNodes'] as $item1) {
                    $model->excludeNodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['IncludeNodes'])) {
            if (!empty($map['IncludeNodes'])) {
                $model->includeNodes = [];
                $n1 = 0;
                foreach ($map['IncludeNodes'] as $item1) {
                    $model->includeNodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NodeSpecCount'])) {
            $model->nodeSpecCount = $map['NodeSpecCount'];
        }

        return $model;
    }
}
