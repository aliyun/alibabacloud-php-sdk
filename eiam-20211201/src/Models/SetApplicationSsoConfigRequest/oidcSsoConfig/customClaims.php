<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\oidcSsoConfig;

use AlibabaCloud\Dara\Model;

class customClaims extends Model
{
    /**
     * @var string
     */
    public $claimName;

    /**
     * @var string
     */
    public $claimValueExpression;
    protected $_name = [
        'claimName' => 'ClaimName',
        'claimValueExpression' => 'ClaimValueExpression',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
