<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class OperateAppRequest extends Model
{
    /**
     * @description The ID of the app.
     *
     * @example 1234
     *
     * @var int
     */
    public $appId;

    /**
     * @description The IDs of the cloud phone instances.
     *
     * @var string[]
     */
    public $instanceIdList;

    /**
     * @description The type of the operation.
     *
     * Valid values:
     *
     *   stop: closes the app.
     *   restart: reopens the app.
     *   start: open the app.
     *
     * @example start
     *
     * @var string
     */
    public $operateType;
    protected $_name = [
        'appId' => 'AppId',
        'instanceIdList' => 'InstanceIdList',
        'operateType' => 'OperateType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = $map['InstanceIdList'];
            }
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        return $model;
    }
}
