<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models;

use AlibabaCloud\Dara\Model;

class CreateThirdAppAccessTokenShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $authorizerId;

    /**
     * @var string
     */
    public $businessChannel;

    /**
     * @var int
     */
    public $expiration;

    /**
     * @var string
     */
    public $resourceShrink;
    protected $_name = [
        'authorizerId' => 'AuthorizerId',
        'businessChannel' => 'BusinessChannel',
        'expiration' => 'Expiration',
        'resourceShrink' => 'Resource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizerId) {
            $res['AuthorizerId'] = $this->authorizerId;
        }

        if (null !== $this->businessChannel) {
            $res['BusinessChannel'] = $this->businessChannel;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->resourceShrink) {
            $res['Resource'] = $this->resourceShrink;
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
        if (isset($map['AuthorizerId'])) {
            $model->authorizerId = $map['AuthorizerId'];
        }

        if (isset($map['BusinessChannel'])) {
            $model->businessChannel = $map['BusinessChannel'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['Resource'])) {
            $model->resourceShrink = $map['Resource'];
        }

        return $model;
    }
}
