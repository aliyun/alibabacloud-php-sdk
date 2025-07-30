<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\oidcSsoConfig;

use AlibabaCloud\Tea\Model;

class customClaims extends Model
{
    /**
     * @description The claim name.
     *
     * @example "Role"
     *
     * @var string
     */
    public $claimName;

    /**
     * @description The expression that is used to calculate the value of the claim.
     *
     * @example user.dict.applicationRole
     *
     * @var string
     */
    public $claimValueExpression;
    protected $_name = [
        'claimName' => 'ClaimName',
        'claimValueExpression' => 'ClaimValueExpression',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->claimName) {
            $res['ClaimName'] = $this->claimName;
        }
        if (null !== $this->claimValueExpression) {
            $res['ClaimValueExpression'] = $this->claimValueExpression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customClaims
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClaimName'])) {
            $model->claimName = $map['ClaimName'];
        }
        if (isset($map['ClaimValueExpression'])) {
            $model->claimValueExpression = $map['ClaimValueExpression'];
        }

        return $model;
    }
}
