<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SignOutOrgAccountRequest\tenantContext;

class SignOutOrgAccountRequest extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @var string[]
     */
    public $reasonI18nForEmployee;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'reason' => 'Reason',
        'reasonI18nForEmployee' => 'ReasonI18nForEmployee',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->reasonI18nForEmployee)) {
            Model::validateArray($this->reasonI18nForEmployee);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->reasonI18nForEmployee) {
            if (\is_array($this->reasonI18nForEmployee)) {
                $res['ReasonI18nForEmployee'] = [];
                foreach ($this->reasonI18nForEmployee as $key1 => $value1) {
                    $res['ReasonI18nForEmployee'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
            if (!empty($map['ReasonI18nForEmployee'])) {
                $model->reasonI18nForEmployee = [];
                foreach ($map['ReasonI18nForEmployee'] as $key1 => $value1) {
                    $model->reasonI18nForEmployee[$key1] = $value1;
                }
            }
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
