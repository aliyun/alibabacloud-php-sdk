<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody;

use AlibabaCloud\Dara\Model;

class passwordStrategy extends Model
{
    /**
     * @var string[]
     */
    public $tenantAlternativeChars;

    /**
     * @var int
     */
    public $tenantPasswordLength;
    protected $_name = [
        'tenantAlternativeChars' => 'TenantAlternativeChars',
        'tenantPasswordLength' => 'TenantPasswordLength',
    ];

    public function validate()
    {
        if (\is_array($this->tenantAlternativeChars)) {
            Model::validateArray($this->tenantAlternativeChars);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantAlternativeChars) {
            if (\is_array($this->tenantAlternativeChars)) {
                $res['TenantAlternativeChars'] = [];
                $n1 = 0;
                foreach ($this->tenantAlternativeChars as $item1) {
                    $res['TenantAlternativeChars'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tenantPasswordLength) {
            $res['TenantPasswordLength'] = $this->tenantPasswordLength;
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
        if (isset($map['TenantAlternativeChars'])) {
            if (!empty($map['TenantAlternativeChars'])) {
                $model->tenantAlternativeChars = [];
                $n1 = 0;
                foreach ($map['TenantAlternativeChars'] as $item1) {
                    $model->tenantAlternativeChars[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TenantPasswordLength'])) {
            $model->tenantPasswordLength = $map['TenantPasswordLength'];
        }

        return $model;
    }
}
