<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateControlPlaneLogRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 162981*****
     *
     * @var string
     */
    public $aliuid;

    /**
     * @description The control plane components for which you want to enable log collection.
     *
     * @var string[]
     */
    public $components;

    /**
     * @description The name of the Simple Log Service project that you want to use to store the logs of control plane components.
     *
     * Default value: k8s-log-$Cluster ID.
     * @example k8s-log-c5b5e80b0b64a4bf6939d2d8fbbc5****
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The retention period of the log data stored in the Logstore. Valid values: 1 to 3000. Unit: days.
     *
     * Default value: 30.
     * @example 30
     *
     * @var string
     */
    public $logTtl;
    protected $_name = [
        'aliuid'     => 'aliuid',
        'components' => 'components',
        'logProject' => 'log_project',
        'logTtl'     => 'log_ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['aliuid'] = $this->aliuid;
        }
        if (null !== $this->components) {
            $res['components'] = $this->components;
        }
        if (null !== $this->logProject) {
            $res['log_project'] = $this->logProject;
        }
        if (null !== $this->logTtl) {
            $res['log_ttl'] = $this->logTtl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateControlPlaneLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliuid'])) {
            $model->aliuid = $map['aliuid'];
        }
        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = $map['components'];
            }
        }
        if (isset($map['log_project'])) {
            $model->logProject = $map['log_project'];
        }
        if (isset($map['log_ttl'])) {
            $model->logTtl = $map['log_ttl'];
        }

        return $model;
    }
}
