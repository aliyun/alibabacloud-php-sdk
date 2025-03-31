<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TestDataSourceConnectivityResponseBody\connectivity;

class TestDataSourceConnectivityResponseBody extends Model
{
    /**
     * @var connectivity
     */
    public $connectivity;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectivity' => 'Connectivity',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->connectivity) {
            $this->connectivity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectivity) {
            $res['Connectivity'] = null !== $this->connectivity ? $this->connectivity->toArray($noStream) : $this->connectivity;
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
        if (isset($map['Connectivity'])) {
            $model->connectivity = connectivity::fromMap($map['Connectivity']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
