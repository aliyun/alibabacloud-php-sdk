<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHASwitchConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $manualHATime;

    /**
     * @var string
     */
    public $HAConfig;
    protected $_name = [
        'requestId'    => 'RequestId',
        'manualHATime' => 'ManualHATime',
        'HAConfig'     => 'HAConfig',
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
        if (null !== $this->manualHATime) {
            $res['ManualHATime'] = $this->manualHATime;
        }
        if (null !== $this->HAConfig) {
            $res['HAConfig'] = $this->HAConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHASwitchConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ManualHATime'])) {
            $model->manualHATime = $map['ManualHATime'];
        }
        if (isset($map['HAConfig'])) {
            $model->HAConfig = $map['HAConfig'];
        }

        return $model;
    }
}
