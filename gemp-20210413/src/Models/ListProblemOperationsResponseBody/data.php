<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemOperationsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 动态标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 服务名称
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 升级    PROBLEM_UPGRADE      撤销     PROBLEM_REVOKE      恢复     PROBLEM_RESTORE       复盘     PROBLEM_IN_REVIEW       完结     PROBLEM_REOPENED       取消     PROBLEM_CANCEL       更新故障通告     PROBLEM_UPDATE_NOTIFY       添加故障小计     PROBLEM_ADD_SUBTOTAL       更新故障     PROBLEM_UPDATE
     *
     * @var string
     */
    public $action;

    /**
     * @description 故障Id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 故障名称
     *
     * @var string
     */
    public $problemName;
    protected $_name = [
        'title'              => 'title',
        'description'        => 'description',
        'relatedServiceName' => 'relatedServiceName',
        'createTime'         => 'createTime',
        'action'             => 'action',
        'problemId'          => 'problemId',
        'problemName'        => 'problemName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemName) {
            $res['problemName'] = $this->problemName;
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
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }

        return $model;
    }
}
