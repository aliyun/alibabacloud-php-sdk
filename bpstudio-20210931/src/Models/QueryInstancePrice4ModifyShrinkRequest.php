<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class QueryInstancePrice4ModifyShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 002XWH7MXB8MJRU0
     *
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $configurationShrink;

    /**
     * @description This parameter is required.
     *
     * @example rm-uf66k9143r2ch*****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'configurationShrink' => 'Configuration',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->configurationShrink) {
            $res['Configuration'] = $this->configurationShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInstancePrice4ModifyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Configuration'])) {
            $model->configurationShrink = $map['Configuration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
