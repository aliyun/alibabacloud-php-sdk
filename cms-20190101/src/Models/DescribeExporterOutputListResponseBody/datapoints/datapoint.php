<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints\datapoint\configJson;
use AlibabaCloud\Tea\Model;

class datapoint extends Model
{
    /**
     * @var string
     */
    public $destType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $destName;

    /**
     * @var configJson
     */
    public $configJson;
    protected $_name = [
        'destType'   => 'DestType',
        'createTime' => 'CreateTime',
        'destName'   => 'DestName',
        'configJson' => 'ConfigJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }
        if (null !== $this->configJson) {
            $res['ConfigJson'] = null !== $this->configJson ? $this->configJson->toMap() : null;
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
        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }
        if (isset($map['ConfigJson'])) {
            $model->configJson = configJson::fromMap($map['ConfigJson']);
        }

        return $model;
    }
}
