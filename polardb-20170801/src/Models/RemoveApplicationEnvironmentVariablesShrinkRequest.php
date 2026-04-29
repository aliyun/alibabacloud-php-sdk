<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class RemoveApplicationEnvironmentVariablesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var string
     */
    public $variableNamesShrink;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'restart' => 'Restart',
        'variableNamesShrink' => 'VariableNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        if (null !== $this->variableNamesShrink) {
            $res['VariableNames'] = $this->variableNamesShrink;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        if (isset($map['VariableNames'])) {
            $model->variableNamesShrink = $map['VariableNames'];
        }

        return $model;
    }
}
