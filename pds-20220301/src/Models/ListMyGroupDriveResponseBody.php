<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ListMyGroupDriveResponseBody extends Model
{
    /**
     * @var Drive[]
     */
    public $items;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var Drive
     */
    public $rootGroupDrive;
    protected $_name = [
        'items' => 'items',
        'nextMarker' => 'next_marker',
        'rootGroupDrive' => 'root_group_drive',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (null !== $this->rootGroupDrive) {
            $this->rootGroupDrive->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextMarker) {
            $res['next_marker'] = $this->nextMarker;
        }

        if (null !== $this->rootGroupDrive) {
            $res['root_group_drive'] = null !== $this->rootGroupDrive ? $this->rootGroupDrive->toArray($noStream) : $this->rootGroupDrive;
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
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1++] = Drive::fromMap($item1);
                }
            }
        }

        if (isset($map['next_marker'])) {
            $model->nextMarker = $map['next_marker'];
        }

        if (isset($map['root_group_drive'])) {
            $model->rootGroupDrive = Drive::fromMap($map['root_group_drive']);
        }

        return $model;
    }
}
