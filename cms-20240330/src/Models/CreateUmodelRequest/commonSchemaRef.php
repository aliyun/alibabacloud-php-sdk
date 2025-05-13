<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelRequest;

use AlibabaCloud\Dara\Model;

class commonSchemaRef extends Model
{
    /**
     * @var string
     */
    public $group;

    /**
     * @var string[]
     */
    public $items;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'group' => 'group',
        'items' => 'items',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1++] = $item1;
                }
            }
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
