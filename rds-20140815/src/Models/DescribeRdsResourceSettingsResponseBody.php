<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsResponseBody\rdsInstanceResourceSettings;

class DescribeRdsResourceSettingsResponseBody extends Model
{
    /**
     * @var rdsInstanceResourceSettings
     */
    public $rdsInstanceResourceSettings;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'rdsInstanceResourceSettings' => 'RdsInstanceResourceSettings',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->rdsInstanceResourceSettings) {
            $this->rdsInstanceResourceSettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rdsInstanceResourceSettings) {
            $res['RdsInstanceResourceSettings'] = null !== $this->rdsInstanceResourceSettings ? $this->rdsInstanceResourceSettings->toArray($noStream) : $this->rdsInstanceResourceSettings;
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
        if (isset($map['RdsInstanceResourceSettings'])) {
            $model->rdsInstanceResourceSettings = rdsInstanceResourceSettings::fromMap($map['RdsInstanceResourceSettings']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
