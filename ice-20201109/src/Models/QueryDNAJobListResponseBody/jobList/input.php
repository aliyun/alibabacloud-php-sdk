<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListResponseBody\jobList;

use AlibabaCloud\Tea\Model;

class input extends Model
{
    /**
     * @description The input file. The file can be an OSS object or a media asset. The path of an OSS object can be in one of the following formats:
     *
     * 1\\. oss://bucket/object
     *
     * 2\\. http(s)://bucket.oss-[regionId].aliyuncs.com/object
     *
     * In the preceding paths, bucket indicates an OSS bucket that resides in the same region as the current project, and object indicates the path of the object in the bucket.
     *
     * @example 1b1b9cd148034739af413150fded****
     *
     * @var string
     */
    public $media;

    /**
     * @description The type of the input file. Valid values:
     *
     * 1.  OSS: Object Storage Service (OSS) object.
     * 2.  Media: media asset.
     *
     * @example Media
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'media' => 'Media',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->media) {
            $res['Media'] = $this->media;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
