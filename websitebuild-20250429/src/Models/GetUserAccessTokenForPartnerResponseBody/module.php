<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserAccessTokenForPartnerResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $tokenValue;
    protected $_name = [
        'tokenValue' => 'TokenValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tokenValue) {
            $res['TokenValue'] = $this->tokenValue;
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
        if (isset($map['TokenValue'])) {
            $model->tokenValue = $map['TokenValue'];
        }

        return $model;
    }
}
