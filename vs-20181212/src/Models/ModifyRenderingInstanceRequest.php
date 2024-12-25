<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ModifyRenderingInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @example crs.cp.l1
     *
     * @var string
     */
    public $renderingSpec;

    /**
     * @example 20
     *
     * @var string
     */
    public $storageSize;
    protected $_name = [
        'renderingInstanceId' => 'RenderingInstanceId',
        'renderingSpec'       => 'RenderingSpec',
        'storageSize'         => 'StorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }
        if (null !== $this->renderingSpec) {
            $res['RenderingSpec'] = $this->renderingSpec;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRenderingInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['RenderingSpec'])) {
            $model->renderingSpec = $map['RenderingSpec'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
