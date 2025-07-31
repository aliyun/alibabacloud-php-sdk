<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponseBody\data\customServiceConf;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditRiskLevels) {
            $res['AuditRiskLevels'] = $this->auditRiskLevels;
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

    /**
     * @param array $map
     *
     * @return manualMachineConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditRiskLevels'])) {
            if (!empty($map['AuditRiskLevels'])) {
                $model->auditRiskLevels = $map['AuditRiskLevels'];
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
