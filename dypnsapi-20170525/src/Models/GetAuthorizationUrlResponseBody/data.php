<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthorizationUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizationUrl;
    protected $_name = [
        'authorizationUrl' => 'AuthorizationUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationUrl) {
            $res['AuthorizationUrl'] = $this->authorizationUrl;
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
        if (isset($map['AuthorizationUrl'])) {
            $model->authorizationUrl = $map['AuthorizationUrl'];
        }

        return $model;
    }
}
