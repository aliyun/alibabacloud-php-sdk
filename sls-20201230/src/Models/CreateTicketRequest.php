<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

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
        'expirationTime'            => 'expirationTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateTicketRequest
     */
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
