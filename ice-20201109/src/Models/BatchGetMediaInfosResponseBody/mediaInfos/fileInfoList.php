<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody\mediaInfos;

use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody\mediaInfos\fileInfoList\fileBasicInfo;
use AlibabaCloud\Tea\Model;

class fileInfoList extends Model
{
    /**
     * @description The basic information of the file, including the duration and size.
     *
     * @var fileBasicInfo
     */
    public $fileBasicInfo;
    protected $_name = [
        'fileBasicInfo' => 'FileBasicInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileBasicInfo) {
            $res['FileBasicInfo'] = null !== $this->fileBasicInfo ? $this->fileBasicInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileBasicInfo'])) {
            $model->fileBasicInfo = fileBasicInfo::fromMap($map['FileBasicInfo']);
        }

        return $model;
    }
}
