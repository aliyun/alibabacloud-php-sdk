<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateJwtAuthenticationTokenResponseBody;

use AlibabaCloud\Dara\Model;

class jwtContent extends Model
{
    /**
     * @var string
     */
    public $derivedShortToken;

    /**
     * @var string
     */
    public $jwtValue;
    protected $_name = [
        'derivedShortToken' => 'derivedShortToken',
        'jwtValue' => 'jwtValue',
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

        if (null !== $this->jwtValue) {
            $res['jwtValue'] = $this->jwtValue;
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

        if (isset($map['jwtValue'])) {
            $model->jwtValue = $map['jwtValue'];
        }

        return $model;
    }
}
