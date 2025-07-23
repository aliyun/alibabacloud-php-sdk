<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class QueryInstancePrice4ModifyRequest extends Model
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
     * @var mixed[]
     */
    public $configuration;

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
        'configuration' => 'Configuration',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInstancePrice4ModifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
