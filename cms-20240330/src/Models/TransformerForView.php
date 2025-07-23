<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class TransformerForView extends Model
{
    /**
     * @var TransformAction[]
     */
    public $actions;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var bool
     */
    public $quitAfterMatch;

    /**
     * @var int
     */
    public $sortId;

    /**
     * @var string
     */
    public $transformerId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $transformerName;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'actions' => 'actions',
        'createTime' => 'createTime',
        'description' => 'description',
        'enable' => 'enable',
        'filterSetting' => 'filterSetting',
        'quitAfterMatch' => 'quitAfterMatch',
        'sortId' => 'sortId',
        'transformerId' => 'transformerId',
        'transformerName' => 'transformerName',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toMap() : null;
        }
        if (null !== $this->quitAfterMatch) {
            $res['quitAfterMatch'] = $this->quitAfterMatch;
        }
        if (null !== $this->sortId) {
            $res['sortId'] = $this->sortId;
        }
        if (null !== $this->transformerId) {
            $res['transformerId'] = $this->transformerId;
        }
        if (null !== $this->transformerName) {
            $res['transformerName'] = $this->transformerName;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransformerForView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n = 0;
                foreach ($map['actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? TransformAction::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }
        if (isset($map['quitAfterMatch'])) {
            $model->quitAfterMatch = $map['quitAfterMatch'];
        }
        if (isset($map['sortId'])) {
            $model->sortId = $map['sortId'];
        }
        if (isset($map['transformerId'])) {
            $model->transformerId = $map['transformerId'];
        }
        if (isset($map['transformerName'])) {
            $model->transformerName = $map['transformerName'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
