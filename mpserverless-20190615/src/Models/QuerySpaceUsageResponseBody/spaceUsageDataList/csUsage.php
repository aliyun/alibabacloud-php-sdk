<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageResponseBody\spaceUsageDataList;

use AlibabaCloud\Tea\Model;

class csUsage extends Model
{
    /**
     * @example 94134230
     *
     * @var int
     */
    public $cdnTraffic;

    /**
     * @example 45668113
     *
     * @var int
     */
    public $downloadCount;

    /**
     * @example 4024575081
     *
     * @var int
     */
    public $storageSize;

    /**
     * @example 2352
     *
     * @var int
     */
    public $uploadCount;
    protected $_name = [
        'cdnTraffic'    => 'CdnTraffic',
        'downloadCount' => 'DownloadCount',
        'storageSize'   => 'StorageSize',
        'uploadCount'   => 'UploadCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnTraffic) {
            $res['CdnTraffic'] = $this->cdnTraffic;
        }
        if (null !== $this->downloadCount) {
            $res['DownloadCount'] = $this->downloadCount;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->uploadCount) {
            $res['UploadCount'] = $this->uploadCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return csUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnTraffic'])) {
            $model->cdnTraffic = $map['CdnTraffic'];
        }
        if (isset($map['DownloadCount'])) {
            $model->downloadCount = $map['DownloadCount'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['UploadCount'])) {
            $model->uploadCount = $map['UploadCount'];
        }

        return $model;
    }
}
