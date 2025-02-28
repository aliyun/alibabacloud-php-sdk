<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeHASwitchConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $HAConfig;
    /**
     * @var string
     */
    public $manualHATime;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'HAConfig'     => 'HAConfig',
        'manualHATime' => 'ManualHATime',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->HAConfig) {
            $res['HAConfig'] = $this->HAConfig;
        }

        if (null !== $this->manualHATime) {
            $res['ManualHATime'] = $this->manualHATime;
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
        if (isset($map['HAConfig'])) {
            $model->HAConfig = $map['HAConfig'];
        }

        if (isset($map['ManualHATime'])) {
            $model->manualHATime = $map['ManualHATime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
