<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GetClientKeyRequest extends Model
{
    /**
     * @var string
     */
    public $clientKeyId;
    protected $_name = [
        'clientKeyId' => 'ClientKeyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientKeyId) {
            $res['ClientKeyId'] = $this->clientKeyId;
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
        if (isset($map['ClientKeyId'])) {
            $model->clientKeyId = $map['ClientKeyId'];
        }

        return $model;
    }
}
