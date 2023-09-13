<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters;

use AlibabaCloud\Tea\Model;

class clientParameters extends Model
{
    /**
     * @description The client ID.
     *
     * @example ClientID
     *
     * @var string
     */
    public $clientID;

    /**
     * @description The AccessKey secret of the client.
     *
     * @example Qo57Q~F249~S74GmNPA36pZJoJK4f****
     *
     * @var string
     */
    public $clientSecret;
    protected $_name = [
        'clientID'     => 'ClientID',
        'clientSecret' => 'ClientSecret',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return clientParameters
     */
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
