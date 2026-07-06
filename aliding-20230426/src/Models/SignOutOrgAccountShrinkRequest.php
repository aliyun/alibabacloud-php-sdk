<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class SignOutOrgAccountShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $reasonI18nForEmployeeShrink;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'reason' => 'Reason',
        'reasonI18nForEmployeeShrink' => 'ReasonI18nForEmployee',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->reasonI18nForEmployeeShrink) {
            $res['ReasonI18nForEmployee'] = $this->reasonI18nForEmployeeShrink;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ReasonI18nForEmployee'])) {
            $model->reasonI18nForEmployeeShrink = $map['ReasonI18nForEmployee'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
