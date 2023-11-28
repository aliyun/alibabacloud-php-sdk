<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceIndicesRequest extends Model
{
    /**
     * @description false
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description 15
     *
     * @example false
     *
     * @var bool
     */
    public $isManaged;

    /**
     * @description The ID of the request.
     *
     * @example false
     *
     * @var bool
     */
    public $isOpenstore;

    /**
     * @description 1
     *
     * @example log-0001
     *
     * @var string
     */
    public $name;

    /**
     * @description The header of the response.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The total size of the index in Cloud Hosting. Unit: bytes.
     *
     * @example 15
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'all'         => 'all',
        'isManaged'   => 'isManaged',
        'isOpenstore' => 'isOpenstore',
        'name'        => 'name',
        'page'        => 'page',
        'size'        => 'size',
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
