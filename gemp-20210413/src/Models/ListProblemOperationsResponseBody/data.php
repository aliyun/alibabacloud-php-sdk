<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemOperationsResponseBody;

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
     * @example 12312
     *
     * @var int
     */
    public $problemId;

    /**
     * @example 这是一个故障
     *
     * @var string
     */
    public $problemName;

    /**
     * @example P1231231
     *
     * @var string
     */
    public $problemNumber;

    /**
     * @example 服务名称
     *
     * @var string
     */
    public $relatedServiceName;

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
        'problemId'          => 'problemId',
        'problemName'        => 'problemName',
        'problemNumber'      => 'problemNumber',
        'relatedServiceName' => 'relatedServiceName',
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
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemName) {
            $res['problemName'] = $this->problemName;
        }
        if (null !== $this->problemNumber) {
            $res['problemNumber'] = $this->problemNumber;
        }
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
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
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }
        if (isset($map['problemNumber'])) {
            $model->problemNumber = $map['problemNumber'];
        }
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
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
