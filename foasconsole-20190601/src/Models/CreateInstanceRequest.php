<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceRequest\createInstanceRequest;

class CreateInstanceRequest extends Model
{
    /**
     * @var createInstanceRequest
     */
    public $createInstanceRequest;
    protected $_name = [
        'createInstanceRequest' => 'CreateInstanceRequest',
    ];

    public function validate()
    {
        if (null !== $this->createInstanceRequest) {
            $this->createInstanceRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createInstanceRequest) {
            $res['CreateInstanceRequest'] = null !== $this->createInstanceRequest ? $this->createInstanceRequest->toArray($noStream) : $this->createInstanceRequest;
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
        if (isset($map['CreateInstanceRequest'])) {
            $model->createInstanceRequest = self::fromMap($map['CreateInstanceRequest']);
        }

        return $model;
    }
}
