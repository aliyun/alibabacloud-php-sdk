<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;

class ReleaseAnycastEipAddressRequest extends Model
{
    /**
     * @var string
     */
    public $anycastId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'anycastId' => 'AnycastId',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
