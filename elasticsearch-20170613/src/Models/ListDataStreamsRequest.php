<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDataStreamsRequest extends Model
{
    /**
     * @var bool
     */
    public $isManaged;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'isManaged' => 'isManaged',
        'name'      => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isManaged) {
            $res['isManaged'] = $this->isManaged;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataStreamsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isManaged'])) {
            $model->isManaged = $map['isManaged'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
