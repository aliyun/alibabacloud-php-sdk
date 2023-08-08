<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CheckControlPlaneLogEnableResponseBody extends Model
{
    /**
     * @example 162981*****
     *
     * @var string
     */
    public $aliuid;

    /**
     * @var string[]
     */
    public $components;

    /**
     * @example k8s-log-c5b5e80b0b64a4bf6939d2d8fbbc5****
     *
     * @var string
     */
    public $logProject;

    /**
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
     * @return CheckControlPlaneLogEnableResponseBody
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
