<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ExpertResourceSetting extends Model
{
    /**
     * @var BasicResourceSettingSpec
     */
    public $jobmanagerResourceSettingSpec;

    /**
     * @var string
     */
    public $resourcePlan;
    protected $_name = [
        'jobmanagerResourceSettingSpec' => 'jobmanagerResourceSettingSpec',
        'resourcePlan'                  => 'resourcePlan',
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
        if (null !== $this->resourcePlan) {
            $res['resourcePlan'] = $this->resourcePlan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExpertResourceSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jobmanagerResourceSettingSpec'])) {
            $model->jobmanagerResourceSettingSpec = BasicResourceSettingSpec::fromMap($map['jobmanagerResourceSettingSpec']);
        }
        if (isset($map['resourcePlan'])) {
            $model->resourcePlan = $map['resourcePlan'];
        }

        return $model;
    }
}
