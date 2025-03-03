<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateConnectionRequest\authParameters\OAuthParameters;

use AlibabaCloud\Dara\Model;

class clientParameters extends Model
{
    /**
     * @var string
     */
    public $clientID;
    /**
     * @var string
     */
    public $clientSecret;
    protected $_name = [
        'clientID'     => 'ClientID',
        'clientSecret' => 'ClientSecret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientID) {
            $res['ClientID'] = $this->clientID;
        }

        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
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
        if (isset($map['ClientID'])) {
            $model->clientID = $map['ClientID'];
        }

        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        return $model;
    }
}
