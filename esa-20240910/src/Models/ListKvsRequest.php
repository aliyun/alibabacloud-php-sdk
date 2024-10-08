<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListKvsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test_namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example prefix-
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'namespace'  => 'Namespace',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'prefix'     => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListKvsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
