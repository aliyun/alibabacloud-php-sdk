<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody\config\configValueList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody\config\configValueList\configValue\configItemValueList;
use AlibabaCloud\Tea\Model;

class configValue extends Model
{
    /**
     * @var string
     */
    public $configName;

    /**
     * @var configItemValueList
     */
    public $configItemValueList;
    protected $_name = [
        'configName'          => 'ConfigName',
        'configItemValueList' => 'ConfigItemValueList',
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
        if (null !== $this->configItemValueList) {
            $res['ConfigItemValueList'] = null !== $this->configItemValueList ? $this->configItemValueList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['ConfigItemValueList'])) {
            $model->configItemValueList = configItemValueList::fromMap($map['ConfigItemValueList']);
        }

        return $model;
    }
}
