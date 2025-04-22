<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetShareLinkTokenResponseBody extends Model
{
    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $shareToken;
    protected $_name = [
        'expiresIn' => 'expires_in',
        'shareToken' => 'share_token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresIn) {
            $res['expires_in'] = $this->expiresIn;
        }

        if (null !== $this->shareToken) {
            $res['share_token'] = $this->shareToken;
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
        if (isset($map['expires_in'])) {
            $model->expiresIn = $map['expires_in'];
        }

        if (isset($map['share_token'])) {
            $model->shareToken = $map['share_token'];
        }

        return $model;
    }
}
