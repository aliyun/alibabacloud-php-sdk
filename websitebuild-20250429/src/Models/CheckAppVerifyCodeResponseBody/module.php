<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CheckAppVerifyCodeResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $maskedTarget;

    /**
     * @var string
     */
    public $recipientId;
    protected $_name = [
        'maskedTarget' => 'MaskedTarget',
        'recipientId' => 'RecipientId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maskedTarget) {
            $res['MaskedTarget'] = $this->maskedTarget;
        }

        if (null !== $this->recipientId) {
            $res['RecipientId'] = $this->recipientId;
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
        if (isset($map['MaskedTarget'])) {
            $model->maskedTarget = $map['MaskedTarget'];
        }

        if (isset($map['RecipientId'])) {
            $model->recipientId = $map['RecipientId'];
        }

        return $model;
    }
}
