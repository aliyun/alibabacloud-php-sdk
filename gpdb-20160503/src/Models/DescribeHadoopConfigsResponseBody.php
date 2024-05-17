<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeHadoopConfigsResponseBody extends Model
{
    /**
     * @example hdfs-site
     *
     * @var string
     */
    public $configName;

    /**
     * @example <?xml version="1.0"?>
     * <property>
     * @var string
     */
    public $configValue;

    /**
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configName'  => 'ConfigName',
        'configValue' => 'ConfigValue',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHadoopConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
