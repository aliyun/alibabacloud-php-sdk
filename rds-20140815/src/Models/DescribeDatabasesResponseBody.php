<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases;

class DescribeDatabasesResponseBody extends Model
{
    /**
     * @var databases
     */
    public $databases;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'databases' => 'Databases',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->databases) {
            $this->databases->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = null !== $this->databases ? $this->databases->toArray($noStream) : $this->databases;
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
        if (isset($map['Databases'])) {
            $model->databases = databases::fromMap($map['Databases']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
