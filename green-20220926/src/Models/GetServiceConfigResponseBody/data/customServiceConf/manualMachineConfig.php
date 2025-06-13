<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponseBody\data\customServiceConf;

use AlibabaCloud\Dara\Model;

class manualMachineConfig extends Model
{
    /**
     * @var string[]
     */
    public $auditRiskLevels;

    /**
     * @var int
     */
    public $callbackId;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $manualService;
    protected $_name = [
        'auditRiskLevels' => 'AuditRiskLevels',
        'callbackId' => 'CallbackId',
        'enable' => 'Enable',
        'manualService' => 'ManualService',
    ];

    public function validate()
    {
        if (\is_array($this->auditRiskLevels)) {
            Model::validateArray($this->auditRiskLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditRiskLevels) {
            if (\is_array($this->auditRiskLevels)) {
                $res['AuditRiskLevels'] = [];
                $n1 = 0;
                foreach ($this->auditRiskLevels as $item1) {
                    $res['AuditRiskLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->callbackId) {
            $res['CallbackId'] = $this->callbackId;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->manualService) {
            $res['ManualService'] = $this->manualService;
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
        if (isset($map['AuditRiskLevels'])) {
            if (!empty($map['AuditRiskLevels'])) {
                $model->auditRiskLevels = [];
                $n1 = 0;
                foreach ($map['AuditRiskLevels'] as $item1) {
                    $model->auditRiskLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CallbackId'])) {
            $model->callbackId = $map['CallbackId'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['ManualService'])) {
            $model->manualService = $map['ManualService'];
        }

        return $model;
    }
}
