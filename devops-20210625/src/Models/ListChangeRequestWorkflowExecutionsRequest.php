<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListChangeRequestWorkflowExecutionsRequest extends Model
{
    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $perPage;

    /**
     * @var string
     */
    public $releaseStageSn;

    /**
     * @var string
     */
    public $releaseWorkflowSn;

    /**
     * @var string
     */
    public $sort;
    protected $_name = [
        'orderBy' => 'orderBy',
        'organizationId' => 'organizationId',
        'page' => 'page',
        'perPage' => 'perPage',
        'releaseStageSn' => 'releaseStageSn',
        'releaseWorkflowSn' => 'releaseWorkflowSn',
        'sort' => 'sort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
