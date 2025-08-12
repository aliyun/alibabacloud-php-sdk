<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams\fileInfo;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams\OSSParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams\vodParams;

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
     * @var int
     */
    public $storageType;

    /**
     * @var vodParams
     */
    public $vodParams;
    protected $_name = [
        'fileInfo' => 'FileInfo',
        'OSSParams' => 'OSSParams',
        'storageType' => 'StorageType',
        'vodParams' => 'VodParams',
    ];

    public function validate()
    {
        if (\is_array($this->fileInfo)) {
            Model::validateArray($this->fileInfo);
        }
        if (null !== $this->OSSParams) {
            $this->OSSParams->validate();
        }
        if (null !== $this->vodParams) {
            $this->vodParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileInfo) {
            if (\is_array($this->fileInfo)) {
                $res['FileInfo'] = [];
                $n1 = 0;
                foreach ($this->fileInfo as $item1) {
                    $res['FileInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->OSSParams) {
            $res['OSSParams'] = null !== $this->OSSParams ? $this->OSSParams->toArray($noStream) : $this->OSSParams;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->vodParams) {
            $res['VodParams'] = null !== $this->vodParams ? $this->vodParams->toArray($noStream) : $this->vodParams;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileInfo'])) {
            if (!empty($map['FileInfo'])) {
                $model->fileInfo = [];
                $n1 = 0;
                foreach ($map['FileInfo'] as $item1) {
                    $model->fileInfo[$n1] = fileInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OSSParams'])) {
            $model->OSSParams = OSSParams::fromMap($map['OSSParams']);
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['VodParams'])) {
            $model->vodParams = vodParams::fromMap($map['VodParams']);
        }

        return $model;
    }
}
