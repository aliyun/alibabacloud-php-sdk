<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class BasicResourceSetting extends Model
{
    /**
     * @var BasicResourceSettingSpec
     */
    public $jobmanagerResourceSettingSpec;

    /**
     * @var int
     */
    public $parallelism;

    /**
     * @var BasicResourceSettingSpec
     */
    public $taskmanagerResourceSettingSpec;
    protected $_name = [
        'jobmanagerResourceSettingSpec' => 'jobmanagerResourceSettingSpec',
        'parallelism' => 'parallelism',
        'taskmanagerResourceSettingSpec' => 'taskmanagerResourceSettingSpec',
    ];

    public function validate()
    {
        if (null !== $this->jobmanagerResourceSettingSpec) {
            $this->jobmanagerResourceSettingSpec->validate();
        }
        if (null !== $this->taskmanagerResourceSettingSpec) {
            $this->taskmanagerResourceSettingSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobmanagerResourceSettingSpec) {
            $res['jobmanagerResourceSettingSpec'] = null !== $this->jobmanagerResourceSettingSpec ? $this->jobmanagerResourceSettingSpec->toArray($noStream) : $this->jobmanagerResourceSettingSpec;
        }

        if (null !== $this->parallelism) {
            $res['parallelism'] = $this->parallelism;
        }

        if (null !== $this->taskmanagerResourceSettingSpec) {
            $res['taskmanagerResourceSettingSpec'] = null !== $this->taskmanagerResourceSettingSpec ? $this->taskmanagerResourceSettingSpec->toArray($noStream) : $this->taskmanagerResourceSettingSpec;
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
        if (isset($map['jobmanagerResourceSettingSpec'])) {
            $model->jobmanagerResourceSettingSpec = BasicResourceSettingSpec::fromMap($map['jobmanagerResourceSettingSpec']);
        }

        if (isset($map['parallelism'])) {
            $model->parallelism = $map['parallelism'];
        }

        if (isset($map['taskmanagerResourceSettingSpec'])) {
            $model->taskmanagerResourceSettingSpec = BasicResourceSettingSpec::fromMap($map['taskmanagerResourceSettingSpec']);
        }

        return $model;
    }
}
