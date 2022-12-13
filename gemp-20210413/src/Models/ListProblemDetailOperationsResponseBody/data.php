<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemDetailOperationsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example PROBLEM_CANCEL
     *
     * @var string
     */
    public $action;

    /**
     * @example 2021-01-23 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @example 服务A
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @example 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @example {“userName”:"小明"}
     *
     * @var string
     */
    public $snapshotData;

    /**
     * @example 动态标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'action'             => 'action',
        'createTime'         => 'createTime',
        'description'        => 'description',
        'relatedServiceName' => 'relatedServiceName',
        'remark'             => 'remark',
        'snapshotData'       => 'snapshotData',
        'title'              => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->snapshotData) {
            $res['snapshotData'] = $this->snapshotData;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['snapshotData'])) {
            $model->snapshotData = $map['snapshotData'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
