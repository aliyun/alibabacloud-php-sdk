<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ResetGatewayQuotaRuleRequest extends Model
{
    /**
     * @var string
     */
    public $conflictHash;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var int
     */
    public $quotaLimit;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'conflictHash' => 'conflictHash',
        'dryRun' => 'dryRun',
        'overwrite' => 'overwrite',
        'periodType' => 'periodType',
        'quotaLimit' => 'quotaLimit',
        'timezone' => 'timezone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflictHash) {
            $res['conflictHash'] = $this->conflictHash;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->overwrite) {
            $res['overwrite'] = $this->overwrite;
        }

        if (null !== $this->periodType) {
            $res['periodType'] = $this->periodType;
        }

        if (null !== $this->quotaLimit) {
            $res['quotaLimit'] = $this->quotaLimit;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
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
        if (isset($map['conflictHash'])) {
            $model->conflictHash = $map['conflictHash'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['overwrite'])) {
            $model->overwrite = $map['overwrite'];
        }

        if (isset($map['periodType'])) {
            $model->periodType = $map['periodType'];
        }

        if (isset($map['quotaLimit'])) {
            $model->quotaLimit = $map['quotaLimit'];
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        return $model;
    }
}
