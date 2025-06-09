<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class CreateTicketRequest extends Model
{
    /**
     * @var int
     */
    public $accessTokenExpirationTime;

    /**
     * @var int
     */
    public $expirationTime;
    protected $_name = [
        'accessTokenExpirationTime' => 'accessTokenExpirationTime',
        'expirationTime' => 'expirationTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokenExpirationTime) {
            $res['accessTokenExpirationTime'] = $this->accessTokenExpirationTime;
        }

        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
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
        if (isset($map['accessTokenExpirationTime'])) {
            $model->accessTokenExpirationTime = $map['accessTokenExpirationTime'];
        }

        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }

        return $model;
    }
}
