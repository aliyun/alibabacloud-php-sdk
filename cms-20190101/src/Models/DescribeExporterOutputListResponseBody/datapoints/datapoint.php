<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints\datapoint\configJson;

class datapoint extends Model
{
    /**
     * @var configJson
     */
    public $configJson;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $destName;

    /**
     * @var string
     */
    public $destType;
    protected $_name = [
        'configJson' => 'ConfigJson',
        'createTime' => 'CreateTime',
        'destName' => 'DestName',
        'destType' => 'DestType',
    ];

    public function validate()
    {
        if (null !== $this->configJson) {
            $this->configJson->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configJson) {
            $res['ConfigJson'] = null !== $this->configJson ? $this->configJson->toArray($noStream) : $this->configJson;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
