<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListWebApplicationInstancesShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceIdsShrink;

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
     * @var string
     */
    public $statusesShrink;

    /**
     * @var string
     */
    public $versionIdsShrink;
    protected $_name = [
        'endTime' => 'EndTime',
        'instanceIdsShrink' => 'InstanceIds',
        'limit' => 'Limit',
        'namespaceId' => 'NamespaceId',
        'startTime' => 'StartTime',
        'statusesShrink' => 'Statuses',
        'versionIdsShrink' => 'VersionIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
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

        if (null !== $this->statusesShrink) {
            $res['Statuses'] = $this->statusesShrink;
        }

        if (null !== $this->versionIdsShrink) {
            $res['VersionIds'] = $this->versionIdsShrink;
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
            $model->instanceIdsShrink = $map['InstanceIds'];
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
            $model->statusesShrink = $map['Statuses'];
        }

        if (isset($map['VersionIds'])) {
            $model->versionIdsShrink = $map['VersionIds'];
        }

        return $model;
    }
}
