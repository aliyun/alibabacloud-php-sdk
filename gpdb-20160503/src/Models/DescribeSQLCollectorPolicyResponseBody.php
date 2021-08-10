<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLCollectorPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $SQLCollectorStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'SQLCollectorStatus' => 'SQLCollectorStatus',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLCollectorStatus) {
            $res['SQLCollectorStatus'] = $this->SQLCollectorStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLCollectorPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLCollectorStatus'])) {
            $model->SQLCollectorStatus = $map['SQLCollectorStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
