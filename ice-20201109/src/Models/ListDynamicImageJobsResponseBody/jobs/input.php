<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsResponseBody\jobs;

use AlibabaCloud\Tea\Model;

class input extends Model
{
    /**
     * @description The input file. The file can be an OSS object or a media asset. The URL of an OSS object can be in one of the following formats:
     *
     * 2.  http(s)://bucket.oss-[regionId].aliyuncs.com/object In the URL, bucket specifies an OSS bucket that resides in the same region as the job, and object specifies the object URL in OSS.
     * @example oss://bucket/object
     *
     * @var string
     */
    public $media;

    /**
     * @description The type of the input file. Valid values:
     *
     *
     * @example OSS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'media' => 'Media',
        'type'  => 'Type',
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
