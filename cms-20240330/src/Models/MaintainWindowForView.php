<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\MaintainWindowForView\effectTimeRange;

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
     * @var effectTimeRange
     */
    public $effectTimeRange;

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
        'createTime' => 'createTime',
        'description' => 'description',
        'effectTimeRange' => 'effectTimeRange',
        'effective' => 'effective',
        'enable' => 'enable',
        'endTime' => 'endTime',
        'filterSetting' => 'filterSetting',
        'maintainWindowId' => 'maintainWindowId',
        'maintainWindowName' => 'maintainWindowName',
        'startTime' => 'startTime',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->effectTimeRange) {
            $this->effectTimeRange->validate();
        }
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->effectTimeRange) {
            $res['effectTimeRange'] = null !== $this->effectTimeRange ? $this->effectTimeRange->toArray($noStream) : $this->effectTimeRange;
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
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['effectTimeRange'])) {
            $model->effectTimeRange = effectTimeRange::fromMap($map['effectTimeRange']);
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
