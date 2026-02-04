<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models;

use AlibabaCloud\Dara\Model;

class GetStsTokenRequest extends Model
{
    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var int
     */
    public $expiration;

    /**
     * @var string
     */
    public $externalId;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'expiration' => 'Expiration',
        'externalId' => 'ExternalId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
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
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }

        return $model;
    }
}
