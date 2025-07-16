<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\dingNormalCard;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\dingNormalCard\dynamicDataSourceConfigs\pullConfig;
use AlibabaCloud\Tea\Model;

class dynamicDataSourceConfigs extends Model
{
    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $constParams;

    /**
     * @example dynamicDataSourceId1
     *
     * @var string
     */
    public $dynamicDataSourceId;

    /**
     * @example {}
     *
     * @var pullConfig
     */
    public $pullConfig;
    protected $_name = [
        'constParams' => 'constParams',
        'dynamicDataSourceId' => 'dynamicDataSourceId',
        'pullConfig' => 'pullConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->constParams) {
            $res['constParams'] = $this->constParams;
        }
        if (null !== $this->dynamicDataSourceId) {
            $res['dynamicDataSourceId'] = $this->dynamicDataSourceId;
        }
        if (null !== $this->pullConfig) {
            $res['pullConfig'] = null !== $this->pullConfig ? $this->pullConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dynamicDataSourceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['constParams'])) {
            $model->constParams = $map['constParams'];
        }
        if (isset($map['dynamicDataSourceId'])) {
            $model->dynamicDataSourceId = $map['dynamicDataSourceId'];
        }
        if (isset($map['pullConfig'])) {
            $model->pullConfig = pullConfig::fromMap($map['pullConfig']);
        }

        return $model;
    }
}
