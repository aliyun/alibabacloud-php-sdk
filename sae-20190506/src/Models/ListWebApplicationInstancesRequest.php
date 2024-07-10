<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListWebApplicationInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @example c-667d143a-17b4e0fa-46d3a2******
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @example 10
     *
     * @var string
     */
    public $limit;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $statuses;

    /**
     * @example 001
     *
     * @var string[]
     */
    public $versionIds;
    protected $_name = [
        'endTime'     => 'EndTime',
        'instanceIds' => 'InstanceIds',
        'limit'       => 'Limit',
        'namespaceId' => 'NamespaceId',
        'startTime'   => 'StartTime',
        'statuses'    => 'Statuses',
        'versionIds'  => 'VersionIds',
    ];

    public function validate()
    {
    }

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
