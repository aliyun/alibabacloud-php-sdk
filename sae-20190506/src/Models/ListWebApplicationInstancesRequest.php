<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListWebApplicationInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $limit;

    /**
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

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        if (\is_array($this->versionIds)) {
            Model::validateArray($this->versionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->versionIds) {
            if (\is_array($this->versionIds)) {
                $res['VersionIds'] = [];
                $n1 = 0;
                foreach ($this->versionIds as $item1) {
                    $res['VersionIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
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
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VersionIds'])) {
            if (!empty($map['VersionIds'])) {
                $model->versionIds = [];
                $n1 = 0;
                foreach ($map['VersionIds'] as $item1) {
                    $model->versionIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
