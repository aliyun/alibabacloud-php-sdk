<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianControl\V20240816\Models\GetApiKeyResponseBody\apiKey\authSetModel;

use AlibabaCloud\Dara\Model;

class authAppStructure extends Model
{
    /**
     * @var string[]
     */
    public $agents;

    /**
     * @var string[]
     */
    public $highCodeApps;

    /**
     * @var bool
     */
    public $isAllowAccessAllApps;

    /**
     * @var string[]
     */
    public $workflows;
    protected $_name = [
        'agents' => 'agents',
        'highCodeApps' => 'highCodeApps',
        'isAllowAccessAllApps' => 'isAllowAccessAllApps',
        'workflows' => 'workflows',
    ];

    public function validate()
    {
        if (\is_array($this->agents)) {
            Model::validateArray($this->agents);
        }
        if (\is_array($this->highCodeApps)) {
            Model::validateArray($this->highCodeApps);
        }
        if (\is_array($this->workflows)) {
            Model::validateArray($this->workflows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agents) {
            if (\is_array($this->agents)) {
                $res['agents'] = [];
                $n1 = 0;
                foreach ($this->agents as $item1) {
                    $res['agents'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->highCodeApps) {
            if (\is_array($this->highCodeApps)) {
                $res['highCodeApps'] = [];
                $n1 = 0;
                foreach ($this->highCodeApps as $item1) {
                    $res['highCodeApps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isAllowAccessAllApps) {
            $res['isAllowAccessAllApps'] = $this->isAllowAccessAllApps;
        }

        if (null !== $this->workflows) {
            if (\is_array($this->workflows)) {
                $res['workflows'] = [];
                $n1 = 0;
                foreach ($this->workflows as $item1) {
                    $res['workflows'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['agents'])) {
            if (!empty($map['agents'])) {
                $model->agents = [];
                $n1 = 0;
                foreach ($map['agents'] as $item1) {
                    $model->agents[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['highCodeApps'])) {
            if (!empty($map['highCodeApps'])) {
                $model->highCodeApps = [];
                $n1 = 0;
                foreach ($map['highCodeApps'] as $item1) {
                    $model->highCodeApps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['isAllowAccessAllApps'])) {
            $model->isAllowAccessAllApps = $map['isAllowAccessAllApps'];
        }

        if (isset($map['workflows'])) {
            if (!empty($map['workflows'])) {
                $model->workflows = [];
                $n1 = 0;
                foreach ($map['workflows'] as $item1) {
                    $model->workflows[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
