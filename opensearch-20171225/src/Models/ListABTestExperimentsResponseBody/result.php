<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestExperimentsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $created;

    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var int
     */
    public $traffic;

    /**
     * @var bool
     */
    public $online;

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
    protected $_name = [
        'created' => 'created',
        'params'  => 'params',
        'traffic' => 'traffic',
        'online'  => 'online',
        'name'    => 'name',
        'updated' => 'updated',
        'id'      => 'id',
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
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->traffic) {
            $res['traffic'] = $this->traffic;
        }
        if (null !== $this->online) {
            $res['online'] = $this->online;
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
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['traffic'])) {
            $model->traffic = $map['traffic'];
        }
        if (isset($map['online'])) {
            $model->online = $map['online'];
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

        return $model;
    }
}
