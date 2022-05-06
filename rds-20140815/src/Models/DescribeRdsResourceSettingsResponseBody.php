<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsResponseBody\rdsInstanceResourceSettings;
use AlibabaCloud\Tea\Model;

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
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsInstanceResourceSettings) {
            $res['RdsInstanceResourceSettings'] = null !== $this->rdsInstanceResourceSettings ? $this->rdsInstanceResourceSettings->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsResourceSettingsResponseBody
     */
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
