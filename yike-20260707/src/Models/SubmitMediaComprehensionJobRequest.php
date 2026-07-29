<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class SubmitMediaComprehensionJobRequest extends Model
{
    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $jobParams;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'input' => 'Input',
        'jobParams' => 'JobParams',
        'jobType' => 'JobType',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
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
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
