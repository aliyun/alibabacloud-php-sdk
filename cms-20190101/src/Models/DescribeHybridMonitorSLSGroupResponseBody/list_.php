<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorSLSGroupResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorSLSGroupResponseBody\list_\SLSGroupConfig;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var SLSGroupConfig[]
     */
    public $SLSGroupConfig;

    /**
     * @var string
     */
    public $SLSGroupDescription;

    /**
     * @var int
     */
    public $SLSGroupName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'SLSGroupConfig'      => 'SLSGroupConfig',
        'SLSGroupDescription' => 'SLSGroupDescription',
        'SLSGroupName'        => 'SLSGroupName',
        'updateTime'          => 'UpdateTime',
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
        if (null !== $this->SLSGroupConfig) {
            $res['SLSGroupConfig'] = [];
            if (null !== $this->SLSGroupConfig && \is_array($this->SLSGroupConfig)) {
                $n = 0;
                foreach ($this->SLSGroupConfig as $item) {
                    $res['SLSGroupConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->SLSGroupDescription) {
            $res['SLSGroupDescription'] = $this->SLSGroupDescription;
        }
        if (null !== $this->SLSGroupName) {
            $res['SLSGroupName'] = $this->SLSGroupName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SLSGroupConfig'])) {
            if (!empty($map['SLSGroupConfig'])) {
                $model->SLSGroupConfig = [];
                $n                     = 0;
                foreach ($map['SLSGroupConfig'] as $item) {
                    $model->SLSGroupConfig[$n++] = null !== $item ? SLSGroupConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SLSGroupDescription'])) {
            $model->SLSGroupDescription = $map['SLSGroupDescription'];
        }
        if (isset($map['SLSGroupName'])) {
            $model->SLSGroupName = $map['SLSGroupName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
