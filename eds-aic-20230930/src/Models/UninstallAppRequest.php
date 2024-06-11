<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class UninstallAppRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdList;

    /**
     * @var string[]
     */
    public $instanceGroupIdList;
    protected $_name = [
        'appIdList'           => 'AppIdList',
        'instanceGroupIdList' => 'InstanceGroupIdList',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UninstallAppRequest
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

        return $model;
    }
}
