<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertConfigurationResponseBody extends Model
{
    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $scaleStatuses;
    protected $_name = [
        'requestId'     => 'RequestId',
        'scaleStatuses' => 'ScaleStatuses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scaleStatuses) {
            $res['ScaleStatuses'] = $this->scaleStatuses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScaleStatuses'])) {
            if (!empty($map['ScaleStatuses'])) {
                $model->scaleStatuses = $map['ScaleStatuses'];
            }
        }

        return $model;
    }
}
