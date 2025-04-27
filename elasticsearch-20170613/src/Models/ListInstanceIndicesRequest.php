<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ListInstanceIndicesRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @var bool
     */
    public $isManaged;

    /**
     * @var bool
     */
    public $isOpenstore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'all' => 'all',
        'isManaged' => 'isManaged',
        'isOpenstore' => 'isOpenstore',
        'name' => 'name',
        'page' => 'page',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }

        if (null !== $this->isManaged) {
            $res['isManaged'] = $this->isManaged;
        }

        if (null !== $this->isOpenstore) {
            $res['isOpenstore'] = $this->isOpenstore;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }

        if (isset($map['isManaged'])) {
            $model->isManaged = $map['isManaged'];
        }

        if (isset($map['isOpenstore'])) {
            $model->isOpenstore = $map['isOpenstore'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
