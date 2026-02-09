<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20260101\Models;

use AlibabaCloud\Dara\Model;

class SubmitTuringTaskRequest extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $idempotentKey;

    /**
     * @var string
     */
    public $imgUrl;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'duration' => 'duration',
        'idempotentKey' => 'idempotentKey',
        'imgUrl' => 'imgUrl',
        'resolution' => 'resolution',
        'resourceType' => 'resourceType',
        'taskType' => 'taskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->idempotentKey) {
            $res['idempotentKey'] = $this->idempotentKey;
        }

        if (null !== $this->imgUrl) {
            $res['imgUrl'] = $this->imgUrl;
        }

        if (null !== $this->resolution) {
            $res['resolution'] = $this->resolution;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['idempotentKey'])) {
            $model->idempotentKey = $map['idempotentKey'];
        }

        if (isset($map['imgUrl'])) {
            $model->imgUrl = $map['imgUrl'];
        }

        if (isset($map['resolution'])) {
            $model->resolution = $map['resolution'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
