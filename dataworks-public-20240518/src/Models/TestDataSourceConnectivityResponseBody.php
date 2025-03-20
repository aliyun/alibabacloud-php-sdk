<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TestDataSourceConnectivityResponseBody\connectivity;
use AlibabaCloud\Tea\Model;

class TestDataSourceConnectivityResponseBody extends Model
{
    /**
     * @var connectivity
     */
    public $connectivity;

    /**
     * @example 4CDF7B72-020B-542A-8465-21CFFA81****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectivity' => 'Connectivity',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectivity) {
            $res['Connectivity'] = null !== $this->connectivity ? $this->connectivity->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestDataSourceConnectivityResponseBody
     */
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
