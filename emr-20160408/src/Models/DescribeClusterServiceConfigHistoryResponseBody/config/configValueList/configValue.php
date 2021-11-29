<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody\config\configValueList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody\config\configValueList\configValue\configItemValueList;
use AlibabaCloud\Tea\Model;

class configValue extends Model
{
    /**
     * @var configItemValueList
     */
    public $configItemValueList;

    /**
     * @var string
     */
    public $configName;
    protected $_name = [
        'configItemValueList' => 'ConfigItemValueList',
        'configName'          => 'ConfigName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItemValueList) {
            $res['ConfigItemValueList'] = null !== $this->configItemValueList ? $this->configItemValueList->toMap() : null;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
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
        if (isset($map['ConfigItemValueList'])) {
            $model->configItemValueList = configItemValueList::fromMap($map['ConfigItemValueList']);
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }

        return $model;
    }
}
