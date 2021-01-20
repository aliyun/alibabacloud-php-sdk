<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints\datapoint\configJson;
use AlibabaCloud\Tea\Model;

class datapoint extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var configJson
     */
    public $configJson;

    /**
     * @var string
     */
    public $destName;

    /**
     * @var string
     */
    public $destType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'configJson' => 'ConfigJson',
        'destName'   => 'DestName',
        'destType'   => 'DestType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->configJson) {
            $res['ConfigJson'] = null !== $this->configJson ? $this->configJson->toMap() : null;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ConfigJson'])) {
            $model->configJson = configJson::fromMap($map['ConfigJson']);
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
