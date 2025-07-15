<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest;

use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams\fileInfo;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams\OSSParams;
use AlibabaCloud\Tea\Model;

class storageParams extends Model
{
    /**
     * @var fileInfo[]
     */
    public $fileInfo;

    /**
     * @var OSSParams
     */
    public $OSSParams;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $storageType;
    protected $_name = [
        'fileInfo' => 'FileInfo',
        'OSSParams' => 'OSSParams',
        'storageType' => 'StorageType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileInfo) {
            $res['FileInfo'] = [];
            if (null !== $this->fileInfo && \is_array($this->fileInfo)) {
                $n = 0;
                foreach ($this->fileInfo as $item) {
                    $res['FileInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->OSSParams) {
            $res['OSSParams'] = null !== $this->OSSParams ? $this->OSSParams->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileInfo'])) {
            if (!empty($map['FileInfo'])) {
                $model->fileInfo = [];
                $n = 0;
                foreach ($map['FileInfo'] as $item) {
                    $model->fileInfo[$n++] = null !== $item ? fileInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OSSParams'])) {
            $model->OSSParams = OSSParams::fromMap($map['OSSParams']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
