<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsHiveWorkloadResponseBody\apsWorkload;
use AlibabaCloud\Tea\Model;

class DescribeApsHiveWorkloadResponseBody extends Model
{
    /**
     * @example -
     *
     * @var apsWorkload
     */
    public $apsWorkload;

    /**
     * @example 86F92D26-B774-5FA1-8E53-******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apsWorkload' => 'ApsWorkload',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apsWorkload) {
            $res['ApsWorkload'] = null !== $this->apsWorkload ? $this->apsWorkload->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApsHiveWorkloadResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApsWorkload'])) {
            $model->apsWorkload = apsWorkload::fromMap($map['ApsWorkload']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
