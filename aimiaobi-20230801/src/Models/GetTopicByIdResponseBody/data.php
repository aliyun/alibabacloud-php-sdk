<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicByIdResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicByIdResponseBody\data\structureSummary;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 异步任务ID（自定义主题场景下使用）
     *
     * @var string
     */
    public $asyncTaskId;

    /**
     * @example 创建用户ID（自定义主题场景下使用）
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 43
     *
     * @var int
     */
    public $hotValue;

    /**
     * @example 热榜ID
     *
     * @var string
     */
    public $id;

    /**
     * @example PENDING
     *
     * @var string
     */
    public $status;

    /**
     * @var structureSummary[]
     */
    public $structureSummary;

    /**
     * @example 热榜摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example 异步任务失败错误信息
     *
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @example 14
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @example 主题唯一名称
     *
     * @var string
     */
    public $topic;

    /**
     * @example 热榜源，目前支持的热榜源: Toutiao：头条、Quark：夸克、Baidu：百度、Sina：新浪。Custom：自定义、Aggregation：热点话题榜
     *
     * @var string
     */
    public $topicSource;

    /**
     * @example 数据版本
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
        'createUser' => 'CreateUser',
        'hotValue' => 'HotValue',
        'id' => 'Id',
        'status' => 'Status',
        'structureSummary' => 'StructureSummary',
        'summary' => 'Summary',
        'taskErrorMessage' => 'TaskErrorMessage',
        'taskStatus' => 'TaskStatus',
        'topic' => 'Topic',
        'topicSource' => 'TopicSource',
        'version' => 'Version',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->hotValue) {
            $res['HotValue'] = $this->hotValue;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->structureSummary) {
            $res['StructureSummary'] = [];
            if (null !== $this->structureSummary && \is_array($this->structureSummary)) {
                $n = 0;
                foreach ($this->structureSummary as $item) {
                    $res['StructureSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->topicSource) {
            $res['TopicSource'] = $this->topicSource;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['HotValue'])) {
            $model->hotValue = $map['HotValue'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StructureSummary'])) {
            if (!empty($map['StructureSummary'])) {
                $model->structureSummary = [];
                $n = 0;
                foreach ($map['StructureSummary'] as $item) {
                    $model->structureSummary[$n++] = null !== $item ? structureSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TopicSource'])) {
            $model->topicSource = $map['TopicSource'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
