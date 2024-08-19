<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class InstallAppRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdList;

    /**
     * @var string[]
     */
    public $instanceGroupIdList;

    /**
     * @var string[]
     */
    public $instanceIdList;
    protected $_name = [
        'appIdList'           => 'AppIdList',
        'instanceGroupIdList' => 'InstanceGroupIdList',
        'instanceIdList'      => 'InstanceIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIdList) {
            $res['AppIdList'] = $this->appIdList;
        }
        if (null !== $this->instanceGroupIdList) {
            $res['InstanceGroupIdList'] = $this->instanceGroupIdList;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIdList'])) {
            if (!empty($map['AppIdList'])) {
                $model->appIdList = $map['AppIdList'];
            }
        }
        if (isset($map['InstanceGroupIdList'])) {
            if (!empty($map['InstanceGroupIdList'])) {
                $model->instanceGroupIdList = $map['InstanceGroupIdList'];
            }
        }
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = $map['InstanceIdList'];
            }
        }

        return $model;
    }
}
