<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\RenewInstanceRequest\renewInstanceRequest;

class RenewInstanceRequest extends Model
{
    /**
     * @var renewInstanceRequest
     */
    public $renewInstanceRequest;
    protected $_name = [
        'renewInstanceRequest' => 'RenewInstanceRequest',
    ];

    public function validate()
    {
        if (null !== $this->renewInstanceRequest) {
            $this->renewInstanceRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->renewInstanceRequest) {
            $res['RenewInstanceRequest'] = null !== $this->renewInstanceRequest ? $this->renewInstanceRequest->toArray($noStream) : $this->renewInstanceRequest;
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
        if (isset($map['RenewInstanceRequest'])) {
            $model->renewInstanceRequest = self::fromMap($map['RenewInstanceRequest']);
        }

        return $model;
    }
}
