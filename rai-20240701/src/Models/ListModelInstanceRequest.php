<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class ListModelInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $easServiceName;

    /**
     * @var int
     */
    public $isSidecarPolicy;

    /**
     * @var int
     */
    public $isSupportContentSafe;

    /**
     * @var int
     */
    public $isSupportPromptAttack;

    /**
     * @var int
     */
    public $isSupportSensitiveTopic;

    /**
     * @var string
     */
    public $modelSource;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'easServiceName' => 'EasServiceName',
        'isSidecarPolicy' => 'IsSidecarPolicy',
        'isSupportContentSafe' => 'IsSupportContentSafe',
        'isSupportPromptAttack' => 'IsSupportPromptAttack',
        'isSupportSensitiveTopic' => 'IsSupportSensitiveTopic',
        'modelSource' => 'ModelSource',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'sortBy' => 'SortBy',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->easServiceName) {
            $res['EasServiceName'] = $this->easServiceName;
        }

        if (null !== $this->isSidecarPolicy) {
            $res['IsSidecarPolicy'] = $this->isSidecarPolicy;
        }

        if (null !== $this->isSupportContentSafe) {
            $res['IsSupportContentSafe'] = $this->isSupportContentSafe;
        }

        if (null !== $this->isSupportPromptAttack) {
            $res['IsSupportPromptAttack'] = $this->isSupportPromptAttack;
        }

        if (null !== $this->isSupportSensitiveTopic) {
            $res['IsSupportSensitiveTopic'] = $this->isSupportSensitiveTopic;
        }

        if (null !== $this->modelSource) {
            $res['ModelSource'] = $this->modelSource;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['EasServiceName'])) {
            $model->easServiceName = $map['EasServiceName'];
        }

        if (isset($map['IsSidecarPolicy'])) {
            $model->isSidecarPolicy = $map['IsSidecarPolicy'];
        }

        if (isset($map['IsSupportContentSafe'])) {
            $model->isSupportContentSafe = $map['IsSupportContentSafe'];
        }

        if (isset($map['IsSupportPromptAttack'])) {
            $model->isSupportPromptAttack = $map['IsSupportPromptAttack'];
        }

        if (isset($map['IsSupportSensitiveTopic'])) {
            $model->isSupportSensitiveTopic = $map['IsSupportSensitiveTopic'];
        }

        if (isset($map['ModelSource'])) {
            $model->modelSource = $map['ModelSource'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
