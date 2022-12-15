<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models\GetSDKInstanceDebugInfoResponseBody;

use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\GetSDKInstanceDebugInfoResponseBody\data\events;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $latestBuild;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $recipe;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $validFromDate;

    /**
     * @var string
     */
    public $validToDate;
    protected $_name = [
        'bundleId'      => 'BundleId',
        'createdAt'     => 'CreatedAt',
        'events'        => 'Events',
        'instanceId'    => 'InstanceId',
        'latestBuild'   => 'LatestBuild',
        'platform'      => 'Platform',
        'recipe'        => 'Recipe',
        'status'        => 'Status',
        'updatedAt'     => 'UpdatedAt',
        'validFromDate' => 'ValidFromDate',
        'validToDate'   => 'ValidToDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->events) {
            $res['Events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['Events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->latestBuild) {
            $res['LatestBuild'] = $this->latestBuild;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->recipe) {
            $res['Recipe'] = $this->recipe;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->validFromDate) {
            $res['ValidFromDate'] = $this->validFromDate;
        }
        if (null !== $this->validToDate) {
            $res['ValidToDate'] = $this->validToDate;
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
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LatestBuild'])) {
            $model->latestBuild = $map['LatestBuild'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Recipe'])) {
            $model->recipe = $map['Recipe'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['ValidFromDate'])) {
            $model->validFromDate = $map['ValidFromDate'];
        }
        if (isset($map['ValidToDate'])) {
            $model->validToDate = $map['ValidToDate'];
        }

        return $model;
    }
}
