<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListWebApplicationInstancesRequest extends Model
{
    /**
     * @description The time when the operation ended.
     *
     * @example 1715567192
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The instance ID.
     *
     * @example c-667d143a-17b4e0fa-46d3a2******
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The number of application instances returned.
     *
     * @example 10
     *
     * @var string
     */
    public $limit;

    /**
     * @description The namespace ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The time when the task was created.
     *
     * @example 1562831689704
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the application instance.
     *
     * @var string[]
     */
    public $statuses;

    /**
     * @description The ID of the application version.
     *
     * @example 001
     *
     * @var string[]
     */
    public $versionIds;
    protected $_name = [
        'endTime' => 'EndTime',
        'instanceIds' => 'InstanceIds',
        'limit' => 'Limit',
        'namespaceId' => 'NamespaceId',
        'startTime' => 'StartTime',
        'statuses' => 'Statuses',
        'versionIds' => 'VersionIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->versionIds) {
            $res['VersionIds'] = $this->versionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWebApplicationInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['VersionIds'])) {
            if (!empty($map['VersionIds'])) {
                $model->versionIds = $map['VersionIds'];
            }
        }

        return $model;
    }
}
