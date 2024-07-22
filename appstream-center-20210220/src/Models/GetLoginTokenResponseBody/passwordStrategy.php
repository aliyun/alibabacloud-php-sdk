<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody;

use AlibabaCloud\Tea\Model;

class passwordStrategy extends Model
{
    /**
     * @var string[]
     */
    public $tenantAlternativeChars;

    /**
     * @example 12
     *
     * @var int
     */
    public $tenantPasswordLength;
    protected $_name = [
        'tenantAlternativeChars' => 'TenantAlternativeChars',
        'tenantPasswordLength'   => 'TenantPasswordLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantAlternativeChars) {
            $res['TenantAlternativeChars'] = $this->tenantAlternativeChars;
        }
        if (null !== $this->tenantPasswordLength) {
            $res['TenantPasswordLength'] = $this->tenantPasswordLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passwordStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantAlternativeChars'])) {
            if (!empty($map['TenantAlternativeChars'])) {
                $model->tenantAlternativeChars = $map['TenantAlternativeChars'];
            }
        }
        if (isset($map['TenantPasswordLength'])) {
            $model->tenantPasswordLength = $map['TenantPasswordLength'];
        }

        return $model;
    }
}
