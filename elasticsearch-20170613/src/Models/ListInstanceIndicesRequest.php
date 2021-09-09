<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceIndicesRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $isManaged;
    protected $_name = [
        'all'       => 'all',
        'name'      => 'name',
        'isManaged' => 'isManaged',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->isManaged) {
            $res['isManaged'] = $this->isManaged;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceIndicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['isManaged'])) {
            $model->isManaged = $map['isManaged'];
        }

        return $model;
    }
}
