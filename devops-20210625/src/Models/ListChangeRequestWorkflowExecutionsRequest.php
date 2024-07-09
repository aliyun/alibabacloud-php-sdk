<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListChangeRequestWorkflowExecutionsRequest extends Model
{
    /**
     * @example id
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
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
     *
     * @var int
     */
    public $perPage;

    /**
     * @description This parameter is required.
     *
     * @example e173f3c11db5445eb426ca33c92207c8
     *
     * @var string
     */
    public $releaseStageSn;

    /**
     * @description This parameter is required.
     *
     * @example ce51b31b996246ecaf874736838360b2
     *
     * @var string
     */
    public $releaseWorkflowSn;

    /**
     * @example desc
     *
     * @var string
     */
    public $sort;
    protected $_name = [
        'orderBy'           => 'orderBy',
        'organizationId'    => 'organizationId',
        'page'              => 'page',
        'perPage'           => 'perPage',
        'releaseStageSn'    => 'releaseStageSn',
        'releaseWorkflowSn' => 'releaseWorkflowSn',
        'sort'              => 'sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->perPage) {
            $res['perPage'] = $this->perPage;
        }
        if (null !== $this->releaseStageSn) {
            $res['releaseStageSn'] = $this->releaseStageSn;
        }
        if (null !== $this->releaseWorkflowSn) {
            $res['releaseWorkflowSn'] = $this->releaseWorkflowSn;
        }
        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangeRequestWorkflowExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['perPage'])) {
            $model->perPage = $map['perPage'];
        }
        if (isset($map['releaseStageSn'])) {
            $model->releaseStageSn = $map['releaseStageSn'];
        }
        if (isset($map['releaseWorkflowSn'])) {
            $model->releaseWorkflowSn = $map['releaseWorkflowSn'];
        }
        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        return $model;
    }
}
