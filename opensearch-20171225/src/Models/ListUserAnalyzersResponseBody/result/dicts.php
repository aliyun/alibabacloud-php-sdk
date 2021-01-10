<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersResponseBody\result;

use AlibabaCloud\Tea\Model;

class dicts extends Model
{
    /**
     * @var int
     */
    public $created;

    /**
     * @var int
     */
    public $entriesCount;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $entriesLimit;

    /**
     * @var bool
     */
    public $available;

    /**
     * @var int
     */
    public $updated;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'created'      => 'created',
        'entriesCount' => 'entriesCount',
        'type'         => 'type',
        'entriesLimit' => 'entriesLimit',
        'available'    => 'available',
        'updated'      => 'updated',
        'id'           => 'id',
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
        if (null !== $this->entriesCount) {
            $res['entriesCount'] = $this->entriesCount;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->entriesLimit) {
            $res['entriesLimit'] = $this->entriesLimit;
        }
        if (null !== $this->available) {
            $res['available'] = $this->available;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dicts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['entriesCount'])) {
            $model->entriesCount = $map['entriesCount'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['entriesLimit'])) {
            $model->entriesLimit = $map['entriesLimit'];
        }
        if (isset($map['available'])) {
            $model->available = $map['available'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
