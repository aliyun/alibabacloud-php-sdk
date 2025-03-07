<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobResponseBody\snapshotJob;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobResponseBody\snapshotJob\input\ossFile;
use AlibabaCloud\Tea\Model;

class input extends Model
{
    /**
     * @description The input file. If Type is set to OSS, the URL of an OSS object is returned. If Type is set to Media, the ID of a media asset is returned. The URL of an OSS object can be in one of the following formats:
     *
     * 2.  http(s)://bucket.oss-[RegionId].aliyuncs.com/object In the URL, bucket specifies an OSS bucket that resides in the same region as the job, and object specifies the object URL in OSS.
     * @example oss://test-bucket/object.mp4
     *
     * @var string
     */
    public $media;

    /**
     * @description The three key elements of OSS.
     *
     * @var ossFile
     */
    public $ossFile;

    /**
     * @description The type of the input file. Valid values:
     *
     * 2.  Media: a media asset.
     * @example OSS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'media'   => 'Media',
        'ossFile' => 'OssFile',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->media) {
            $res['Media'] = $this->media;
        }
        if (null !== $this->ossFile) {
            $res['OssFile'] = null !== $this->ossFile ? $this->ossFile->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return input
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Media'])) {
            $model->media = $map['Media'];
        }
        if (isset($map['OssFile'])) {
            $model->ossFile = ossFile::fromMap($map['OssFile']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
