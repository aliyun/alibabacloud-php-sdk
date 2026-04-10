<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class QueryApiKeysRequest extends Model
{
    /**
     * @var string
     */
    public $externalUserId;
    protected $_name = [
        'externalUserId' => 'externalUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalUserId) {
            $res['externalUserId'] = $this->externalUserId;
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
        if (isset($map['externalUserId'])) {
            $model->externalUserId = $map['externalUserId'];
        }

        return $model;
    }
}
