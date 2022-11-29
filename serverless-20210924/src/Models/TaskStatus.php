<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class TaskStatus extends Model
{
    /**
     * @var string[]
     */
    public $executionDetails;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $statusGeneration;
    protected $_name = [
        'executionDetails' => 'executionDetails',
        'phase'            => 'phase',
        'statusGeneration' => 'statusGeneration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionDetails) {
            $res['executionDetails'] = $this->executionDetails;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }
        if (null !== $this->statusGeneration) {
            $res['statusGeneration'] = $this->statusGeneration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['executionDetails'])) {
            if (!empty($map['executionDetails'])) {
                $model->executionDetails = $map['executionDetails'];
            }
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }
        if (isset($map['statusGeneration'])) {
            $model->statusGeneration = $map['statusGeneration'];
        }

        return $model;
    }
}
