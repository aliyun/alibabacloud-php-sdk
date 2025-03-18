<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenResponseBody;

use AlibabaCloud\Tea\Model;

class passwordStrategy extends Model
{
    /**
     * @description > This is a parameter only for internal use.
     *
     * @var string[]
     */
    public $tenantAlternativeChars;

    /**
     * @description > This is a parameter only for internal use.
     *
     * @example null
     *
     * @var string
     */
    public $tenantPasswordLength;
    protected $_name = [
        'tenantAlternativeChars' => 'TenantAlternativeChars',
        'tenantPasswordLength' => 'TenantPasswordLength',
    ];

    public function validate() {}

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
