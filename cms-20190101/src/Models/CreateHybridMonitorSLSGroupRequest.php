<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorSLSGroupRequest\SLSGroupConfig;
use AlibabaCloud\Tea\Model;

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
        'regionId'            => 'RegionId',
        'SLSGroupConfig'      => 'SLSGroupConfig',
        'SLSGroupDescription' => 'SLSGroupDescription',
        'SLSGroupName'        => 'SLSGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHybridMonitorSLSGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
