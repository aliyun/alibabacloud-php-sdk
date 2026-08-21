<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisRequest\instances;

class AuthDiagnosisRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

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

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'autoCreateRole' => 'autoCreateRole',
        'autoInstallAgent' => 'autoInstallAgent',
        'instances' => 'instances',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

        if (null !== $this->autoCreateRole) {
            $res['autoCreateRole'] = $this->autoCreateRole;
        }

        if (null !== $this->autoInstallAgent) {
            $res['autoInstallAgent'] = $this->autoInstallAgent;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

        if (isset($map['autoCreateRole'])) {
            $model->autoCreateRole = $map['autoCreateRole'];
        }

        if (isset($map['autoInstallAgent'])) {
            $model->autoInstallAgent = $map['autoInstallAgent'];
        }

        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['instances'] as $item1) {
                    $model->instances[$n1] = instances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
