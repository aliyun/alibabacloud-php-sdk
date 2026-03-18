<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class ObtainJwtAuthenticationTokenByDerivedShortTokenRequest extends Model
{
    /**
     * @var string
     */
    public $derivedShortToken;
    protected $_name = [
        'derivedShortToken' => 'derivedShortToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->derivedShortToken) {
            $res['derivedShortToken'] = $this->derivedShortToken;
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
        if (isset($map['derivedShortToken'])) {
            $model->derivedShortToken = $map['derivedShortToken'];
        }

        return $model;
    }
}
