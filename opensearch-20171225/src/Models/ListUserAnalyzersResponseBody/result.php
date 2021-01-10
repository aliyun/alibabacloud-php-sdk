<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersResponseBody\result\dicts;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $created;

    /**
     * @var bool
     */
    public $available;

    /**
     * @var dicts[]
     */
    public $dicts;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $updated;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $business;
    protected $_name = [
        'created'   => 'created',
        'available' => 'available',
        'dicts'     => 'dicts',
        'name'      => 'name',
        'updated'   => 'updated',
        'id'        => 'id',
        'business'  => 'business',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->available) {
            $res['available'] = $this->available;
        }
        if (null !== $this->dicts) {
            $res['dicts'] = [];
            if (null !== $this->dicts && \is_array($this->dicts)) {
                $n = 0;
                foreach ($this->dicts as $item) {
                    $res['dicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->business) {
            $res['business'] = $this->business;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['available'])) {
            $model->available = $map['available'];
        }
        if (isset($map['dicts'])) {
            if (!empty($map['dicts'])) {
                $model->dicts = [];
                $n            = 0;
                foreach ($map['dicts'] as $item) {
                    $model->dicts[$n++] = null !== $item ? dicts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['business'])) {
            $model->business = $map['business'];
        }

        return $model;
    }
}
