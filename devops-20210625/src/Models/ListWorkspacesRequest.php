<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListWorkspacesRequest extends Model
{
    /**
     * @description 用来标记当前开始读取的位置，置空表示从头开始
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 本次读取的最大数据记录数量，默认10，最大100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 枚举值：CREATING-创建中, SUCCESS-运行中, FROZEN-冻结中, RECOVERING-恢复中
     *
     * @var string[]
     */
    public $statusList;

    /**
     * @description 空间模板列表
     *
     * @var string[]
     */
    public $workspaceTemplateList;
    protected $_name = [
        'nextToken'             => 'nextToken',
        'maxResults'            => 'maxResults',
        'statusList'            => 'statusList',
        'workspaceTemplateList' => 'workspaceTemplateList',
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
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->statusList) {
            $res['statusList'] = $this->statusList;
        }
        if (null !== $this->workspaceTemplateList) {
            $res['workspaceTemplateList'] = $this->workspaceTemplateList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkspacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['statusList'])) {
            if (!empty($map['statusList'])) {
                $model->statusList = $map['statusList'];
            }
        }
        if (isset($map['workspaceTemplateList'])) {
            if (!empty($map['workspaceTemplateList'])) {
                $model->workspaceTemplateList = $map['workspaceTemplateList'];
            }
        }

        return $model;
    }
}
