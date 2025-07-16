<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class IcebergNestedField extends Model
{
    /**
     * @var string
     */
    public $doc;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $optional;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'doc' => 'doc',
        'id' => 'id',
        'name' => 'name',
        'optional' => 'optional',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->doc) {
            $res['doc'] = $this->doc;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->optional) {
            $res['optional'] = $this->optional;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IcebergNestedField
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['doc'])) {
            $model->doc = $map['doc'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['optional'])) {
            $model->optional = $map['optional'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
