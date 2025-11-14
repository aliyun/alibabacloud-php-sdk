<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitSceneBatchEditingJobRequest extends Model
{
    /**
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $projectIds;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'outputConfig' => 'OutputConfig',
        'projectIds' => 'ProjectIds',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }

        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }

        if (isset($map['ProjectIds'])) {
            $model->projectIds = $map['ProjectIds'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
