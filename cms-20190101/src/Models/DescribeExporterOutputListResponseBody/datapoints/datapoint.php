<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints\datapoint\configJson;
use AlibabaCloud\Tea\Model;

class datapoint extends Model
{
    /**
     * @description The JSON object that contains the details about the destination to which the monitoring data is exported.
     *
     * @var configJson
     */
    public $configJson;

    /**
     * @description The time when the configuration set was created. The value is a UNIX timestamp.
     *
     * @example 1584016495498
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The name of the configuration set.
     *
     * @example exporterOut
     *
     * @var string
     */
    public $destName;

    /**
     * @description The service to which the monitoring data is exported.
     *
     * > Only Log Service is supported. More services will be supported in the future.
     * @example SLS
     *
     * @var string
     */
    public $destType;
    protected $_name = [
        'configJson' => 'ConfigJson',
        'createTime' => 'CreateTime',
        'destName'   => 'DestName',
        'destType'   => 'DestType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configJson) {
            $res['ConfigJson'] = null !== $this->configJson ? $this->configJson->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }
        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datapoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigJson'])) {
            $model->configJson = configJson::fromMap($map['ConfigJson']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }
        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }

        return $model;
    }
}
