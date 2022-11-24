<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
        'jobmanagerResourceSettingSpec'  => 'jobmanagerResourceSettingSpec',
        'parallelism'                    => 'parallelism',
        'taskmanagerResourceSettingSpec' => 'taskmanagerResourceSettingSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobmanagerResourceSettingSpec) {
            $res['jobmanagerResourceSettingSpec'] = null !== $this->jobmanagerResourceSettingSpec ? $this->jobmanagerResourceSettingSpec->toMap() : null;
        }
        if (null !== $this->parallelism) {
            $res['parallelism'] = $this->parallelism;
        }
        if (null !== $this->taskmanagerResourceSettingSpec) {
            $res['taskmanagerResourceSettingSpec'] = null !== $this->taskmanagerResourceSettingSpec ? $this->taskmanagerResourceSettingSpec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BasicResourceSetting
     */
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
