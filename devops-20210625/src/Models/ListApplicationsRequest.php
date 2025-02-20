<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $pagination;
    /**
     * @var int
     */
    public $perPage;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
