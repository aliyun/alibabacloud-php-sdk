<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class MaintainWindowForView extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $effective;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var string
     */
    public $maintainWindowId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $maintainWindowName;

    /**
     * @var string
     */
    public $startTime;

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
        'createTime'         => 'createTime',
        'description'        => 'description',
        'effective'          => 'effective',
        'enable'             => 'enable',
        'endTime'            => 'endTime',
        'filterSetting'      => 'filterSetting',
        'maintainWindowId'   => 'maintainWindowId',
        'maintainWindowName' => 'maintainWindowName',
        'startTime'          => 'startTime',
        'updateTime'         => 'updateTime',
        'userId'             => 'userId',
        'workspace'          => 'workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->effective) {
            $res['effective'] = $this->effective;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toMap() : null;
        }
        if (null !== $this->maintainWindowId) {
            $res['maintainWindowId'] = $this->maintainWindowId;
        }
        if (null !== $this->maintainWindowName) {
            $res['maintainWindowName'] = $this->maintainWindowName;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
     * @return MaintainWindowForView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['effective'])) {
            $model->effective = $map['effective'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }
        if (isset($map['maintainWindowId'])) {
            $model->maintainWindowId = $map['maintainWindowId'];
        }
        if (isset($map['maintainWindowName'])) {
            $model->maintainWindowName = $map['maintainWindowName'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
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
