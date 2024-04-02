<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateAuditSettingRequest extends Model
{
    /**
     * @var string
     */
    public $auditRange;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $seed;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'auditRange' => 'AuditRange',
        'callback'   => 'Callback',
        'seed'       => 'Seed',
        'sourceIp'   => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditRange) {
            $res['AuditRange'] = $this->auditRange;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAuditSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditRange'])) {
            $model->auditRange = $map['AuditRange'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
