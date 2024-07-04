<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CreateScriptRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 区域ID。
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 集群脚本类型。
     *
     * This parameter is required.
     * @example BOOTSTRAP
     *
     * @var string
     */
    public $scriptType;

    /**
     * @description 集群脚本列表。
     *
     * This parameter is required.
     * @var Script[]
     */
    public $scripts;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'regionId'   => 'RegionId',
        'scriptType' => 'ScriptType',
        'scripts'    => 'Scripts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scriptType) {
            $res['ScriptType'] = $this->scriptType;
        }
        if (null !== $this->scripts) {
            $res['Scripts'] = [];
            if (null !== $this->scripts && \is_array($this->scripts)) {
                $n = 0;
                foreach ($this->scripts as $item) {
                    $res['Scripts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScriptType'])) {
            $model->scriptType = $map['ScriptType'];
        }
        if (isset($map['Scripts'])) {
            if (!empty($map['Scripts'])) {
                $model->scripts = [];
                $n              = 0;
                foreach ($map['Scripts'] as $item) {
                    $model->scripts[$n++] = null !== $item ? Script::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
