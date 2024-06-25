<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetMediaResourceIdRequest extends Model
{
    /**
     * @description The extended fields.
     *
     * > If you set the ResourceType parameter to **2**, this parameter is required.
     * @example {\\"img_rate\\":\\"oneToOne\\"}
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @description The size of the resource. Unit: bytes.
     *
     * This parameter is required.
     * @example 12
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The description of the resource.
     *
     * @var string
     */
    public $memo;

    /**
     * @description The address of the resource.
     *
     * This parameter is required.
     * @example oss://alicom-fc-media/1947741454322274/alicom-fc-media/pic/202205191526575398603697152.png
     *
     * @var string
     */
    public $ossKey;

    /**
     * @description The type of the resource.
     *
     *   **1**: text.
     *   **2**: image. A small image cannot exceed 100 KB in size, and a large image cannot exceed 2 MB in size. The image must be clear. Supported format: JPG, JPEG, and PNG.
     *   **3**: audio.
     *   **4**: video. Supported format: MP4.
     *
     * >
     *
     *   If you set the ResourceType parameter to 2, the **img_rate** required is required. Valid values:
     *
     *   1:1
     *
     *   16:9
     *
     *   3:1
     *
     *   48:65
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $resourceType;
    protected $_name = [
        'extendInfo'   => 'ExtendInfo',
        'fileSize'     => 'FileSize',
        'memo'         => 'Memo',
        'ossKey'       => 'OssKey',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaResourceIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
