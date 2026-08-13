<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetSkillRunRequest extends Model
{
    /**
     * @var bool
     */
    public $includeLogs;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'includeLogs' => 'includeLogs',
        'runId' => 'runId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeLogs) {
            $res['includeLogs'] = $this->includeLogs;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['includeLogs'])) {
            $model->includeLogs = $map['includeLogs'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
