<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class RecoverRenderingDataPackageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dp-449ea3d16c0841b8bf33ec5bbc86a152
     *
     * @var string
     */
    public $dataPackageId;

    /**
     * @var string
     */
    public $loadMode;

    /**
     * @description This parameter is required.
     *
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'dataPackageId' => 'DataPackageId',
        'loadMode' => 'LoadMode',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPackageId) {
            $res['DataPackageId'] = $this->dataPackageId;
        }
        if (null !== $this->loadMode) {
            $res['LoadMode'] = $this->loadMode;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoverRenderingDataPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPackageId'])) {
            $model->dataPackageId = $map['DataPackageId'];
        }
        if (isset($map['LoadMode'])) {
            $model->loadMode = $map['LoadMode'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
