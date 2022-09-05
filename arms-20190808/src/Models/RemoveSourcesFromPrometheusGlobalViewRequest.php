<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class RemoveSourcesFromPrometheusGlobalViewRequest extends Model
{
    /**
     * @var string
     */
    public $globalViewClusterId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceNames;
    protected $_name = [
        'globalViewClusterId' => 'GlobalViewClusterId',
        'groupName'           => 'GroupName',
        'regionId'            => 'RegionId',
        'sourceNames'         => 'SourceNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalViewClusterId) {
            $res['GlobalViewClusterId'] = $this->globalViewClusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceNames) {
            $res['SourceNames'] = $this->sourceNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveSourcesFromPrometheusGlobalViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalViewClusterId'])) {
            $model->globalViewClusterId = $map['GlobalViewClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceNames'])) {
            $model->sourceNames = $map['SourceNames'];
        }

        return $model;
    }
}
