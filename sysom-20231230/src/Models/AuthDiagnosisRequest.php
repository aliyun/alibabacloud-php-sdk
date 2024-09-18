<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisRequest\instances;
use AlibabaCloud\Tea\Model;

class AuthDiagnosisRequest extends Model
{
    /**
     * @var bool
     */
    public $autoCreateRole;

    /**
     * @var bool
     */
    public $autoInstallAgent;

    /**
     * @var instances[]
     */
    public $instances;
    protected $_name = [
        'autoCreateRole'   => 'autoCreateRole',
        'autoInstallAgent' => 'autoInstallAgent',
        'instances'        => 'instances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCreateRole) {
            $res['autoCreateRole'] = $this->autoCreateRole;
        }
        if (null !== $this->autoInstallAgent) {
            $res['autoInstallAgent'] = $this->autoInstallAgent;
        }
        if (null !== $this->instances) {
            $res['instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthDiagnosisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoCreateRole'])) {
            $model->autoCreateRole = $map['autoCreateRole'];
        }
        if (isset($map['autoInstallAgent'])) {
            $model->autoInstallAgent = $map['autoInstallAgent'];
        }
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
