<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class LocationDateCluster extends Model
{
    /**
     * @var Address
     */
    public $address;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string[]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'address'      => 'address',
        'clusterId'    => 'cluster_id',
        'createdAt'    => 'created_at',
        'customLabels' => 'custom_labels',
        'driveId'      => 'drive_id',
        'endTime'      => 'end_time',
        'level'        => 'level',
        'startTime'    => 'start_time',
        'title'        => 'title',
        'updatedAt'    => 'updated_at',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->customLabels) {
            $res['custom_labels'] = $this->customLabels;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LocationDateCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = Address::fromMap($map['address']);
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['custom_labels'])) {
            $model->customLabels = $map['custom_labels'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
