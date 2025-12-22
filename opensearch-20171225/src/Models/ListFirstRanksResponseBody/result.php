<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponseBody\result\meta;

class result extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var int
     */
    public $created;

    /**
     * @var string
     */
    public $description;

    /**
     * @var meta[]
     */
    public $meta;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $updated;
    protected $_name = [
        'active' => 'active',
        'created' => 'created',
        'description' => 'description',
        'meta' => 'meta',
        'name' => 'name',
        'updated' => 'updated',
    ];

    public function validate()
    {
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['meta'] = [];
                $n1 = 0;
                foreach ($this->meta as $item1) {
                    $res['meta'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['meta'])) {
            if (!empty($map['meta'])) {
                $model->meta = [];
                $n1 = 0;
                foreach ($map['meta'] as $item1) {
                    $model->meta[$n1] = meta::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
