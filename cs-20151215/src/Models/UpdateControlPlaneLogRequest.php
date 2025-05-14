<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class UpdateControlPlaneLogRequest extends Model
{
    /**
     * @var string
     */
    public $aliuid;

    /**
     * @var string[]
     */
    public $components;

    /**
     * @var string
     */
    public $logProject;

    /**
     * @var string
     */
    public $logTtl;
    protected $_name = [
        'aliuid' => 'aliuid',
        'components' => 'components',
        'logProject' => 'log_project',
        'logTtl' => 'log_ttl',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['aliuid'] = $this->aliuid;
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['components'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->logProject) {
            $res['log_project'] = $this->logProject;
        }

        if (null !== $this->logTtl) {
            $res['log_ttl'] = $this->logTtl;
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
        if (isset($map['aliuid'])) {
            $model->aliuid = $map['aliuid'];
        }

        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                $n1 = 0;
                foreach ($map['components'] as $item1) {
                    $model->components[$n1++] = $item1;
                }
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
