<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceResponseBody\dbInstance;

class DescribePrinsInstanceResponseBody extends Model
{
    /**
     * @var dbInstance
     */
    public $dbInstance;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dbInstance' => 'DbInstance',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dbInstance) {
            $this->dbInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbInstance) {
            $res['DbInstance'] = null !== $this->dbInstance ? $this->dbInstance->toArray($noStream) : $this->dbInstance;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DbInstance'])) {
            $model->dbInstance = dbInstance::fromMap($map['DbInstance']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
