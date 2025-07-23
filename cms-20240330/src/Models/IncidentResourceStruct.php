<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class IncidentResourceStruct extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var string
     */
    public $incidentResourceId;

    /**
     * @var IncidentResourceDetail
     */
    public $resource;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'description' => 'description',
        'incidentId' => 'incidentId',
        'incidentResourceId' => 'incidentResourceId',
        'resource' => 'resource',
        'source' => 'source',
        'time' => 'time',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentResourceId) {
            $res['incidentResourceId'] = $this->incidentResourceId;
        }
        if (null !== $this->resource) {
            $res['resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncidentResourceStruct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['incidentResourceId'])) {
            $model->incidentResourceId = $map['incidentResourceId'];
        }
        if (isset($map['resource'])) {
            $model->resource = IncidentResourceDetail::fromMap($map['resource']);
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
