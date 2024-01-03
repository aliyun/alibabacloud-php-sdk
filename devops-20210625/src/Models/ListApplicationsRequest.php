<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationsRequest extends Model
{
    /**
     * @example vxc2341gfssad12
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example asc
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example 66c0c9fffeb86b450c199fcd
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example keyset
     *
     * @var string
     */
    public $pagination;

    /**
     * @example 20
     *
     * @var int
     */
    public $perPage;

    /**
     * @example id
     *
     * @var string
     */
    public $sort;
    protected $_name = [
        'nextToken'      => 'nextToken',
        'orderBy'        => 'orderBy',
        'organizationId' => 'organizationId',
        'pagination'     => 'pagination',
        'perPage'        => 'perPage',
        'sort'           => 'sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->pagination) {
            $res['pagination'] = $this->pagination;
        }
        if (null !== $this->perPage) {
            $res['perPage'] = $this->perPage;
        }
        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['pagination'])) {
            $model->pagination = $map['pagination'];
        }
        if (isset($map['perPage'])) {
            $model->perPage = $map['perPage'];
        }
        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        return $model;
    }
}
