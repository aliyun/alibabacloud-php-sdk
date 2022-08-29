<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\fileInfoList\fileBasicInfo;
use AlibabaCloud\Tea\Model;

class fileInfoList extends Model
{
    /**
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
