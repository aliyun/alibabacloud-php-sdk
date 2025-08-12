<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorSLSGroupRequest\SLSGroupConfig;

class CreateHybridMonitorSLSGroupRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

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
    protected $_name = [
        'regionId' => 'RegionId',
        'SLSGroupConfig' => 'SLSGroupConfig',
        'SLSGroupDescription' => 'SLSGroupDescription',
        'SLSGroupName' => 'SLSGroupName',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
