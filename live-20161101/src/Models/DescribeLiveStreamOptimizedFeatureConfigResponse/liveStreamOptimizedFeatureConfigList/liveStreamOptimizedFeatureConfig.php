<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOptimizedFeatureConfigResponse\liveStreamOptimizedFeatureConfigList;

use AlibabaCloud\Tea\Model;

class liveStreamOptimizedFeatureConfig extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $configStatus;

    /**
     * @var string
     */
    public $configValue;
    protected $_name = [
        'domainName'   => 'DomainName',
        'configName'   => 'ConfigName',
        'configStatus' => 'ConfigStatus',
        'configValue'  => 'ConfigValue',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('configName', $this->configName, true);
        Model::validateRequired('configStatus', $this->configStatus, true);
        Model::validateRequired('configValue', $this->configValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->configStatus) {
            $res['ConfigStatus'] = $this->configStatus;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamOptimizedFeatureConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['ConfigStatus'])) {
            $model->configStatus = $map['ConfigStatus'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }

        return $model;
    }
}
