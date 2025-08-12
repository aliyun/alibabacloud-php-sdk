<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorSLSGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorSLSGroupResponseBody\list_\SLSGroupConfig;

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
     * @var string
     */
    public $SLSGroupName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'SLSGroupConfig' => 'SLSGroupConfig',
        'SLSGroupDescription' => 'SLSGroupDescription',
        'SLSGroupName' => 'SLSGroupName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->SLSGroupConfig)) {
            Model::validateArray($this->SLSGroupConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->SLSGroupConfig) {
            if (\is_array($this->SLSGroupConfig)) {
                $res['SLSGroupConfig'] = [];
                $n1 = 0;
                foreach ($this->SLSGroupConfig as $item1) {
                    $res['SLSGroupConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['SLSGroupConfig'])) {
            if (!empty($map['SLSGroupConfig'])) {
                $model->SLSGroupConfig = [];
                $n1 = 0;
                foreach ($map['SLSGroupConfig'] as $item1) {
                    $model->SLSGroupConfig[$n1] = SLSGroupConfig::fromMap($item1);
                    ++$n1;
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
