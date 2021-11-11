<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponseBody\result;

use AlibabaCloud\Tea\Model;

class indices extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $health;

    /**
     * @var bool
     */
    public $isManaged;

    /**
     * @var string
     */
    public $managedStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'createTime'    => 'createTime',
        'health'        => 'health',
        'isManaged'     => 'isManaged',
        'managedStatus' => 'managedStatus',
        'name'          => 'name',
        'size'          => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->isManaged) {
            $res['isManaged'] = $this->isManaged;
        }
        if (null !== $this->managedStatus) {
            $res['managedStatus'] = $this->managedStatus;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['isManaged'])) {
            $model->isManaged = $map['isManaged'];
        }
        if (isset($map['managedStatus'])) {
            $model->managedStatus = $map['managedStatus'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
