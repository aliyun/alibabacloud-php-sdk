<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ScaleOutApplicationRequest extends Model
{
    /**
     * @description The ID of the application that you want to scale out. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 3616cdca-4f92-4413*****************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the instance group where the application you want to scale out is deployed. You can call the QueryApplicationStatus operation to query the group ID. For more information, see [QueryApplicationStatus](~~149394~~).
     *
     * @example 4f1fb6f5-6769-4bd6******************
     *
     * @var string
     */
    public $deployGroup;

    /**
     * @description The ID of the elastic compute unit (ECU) that corresponds to the Elastic Compute Service (ECS) instance to be added to the instance group for scale-out. You can call the ListScaleOutEcu operation to query the ECU ID. For more information, see [ListScaleOutEcu](~~149371~~). Separate multiple ECU IDs with commas (,).
     *
     * @example 8123db90-880f-486f-b***************
     *
     * @var string
     */
    public $ecuInfo;
    protected $_name = [
        'appId'       => 'AppId',
        'deployGroup' => 'DeployGroup',
        'ecuInfo'     => 'EcuInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->deployGroup) {
            $res['DeployGroup'] = $this->deployGroup;
        }
        if (null !== $this->ecuInfo) {
            $res['EcuInfo'] = $this->ecuInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleOutApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DeployGroup'])) {
            $model->deployGroup = $map['DeployGroup'];
        }
        if (isset($map['EcuInfo'])) {
            $model->ecuInfo = $map['EcuInfo'];
        }

        return $model;
    }
}
