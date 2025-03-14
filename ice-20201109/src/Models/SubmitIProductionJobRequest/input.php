<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest;

use AlibabaCloud\Tea\Model;

class input extends Model
{
    /**
     * @description The input file. The file can be an OSS object or a media asset. You can specify the path of an OSS object in one of the following formats:
     *
     * 1.  oss://bucket/object
     * 2.  http(s)://bucket.oss-[regionId].aliyuncs.com/object bucket in the path specifies an OSS bucket that resides in the same region as the intelligent production job. object in the path specifies the object path in OSS.
     *
     * This parameter is required.
     *
     * @example oss://bucket/object
     *
     * @var string
     */
    public $media;

    /**
     * @description The media type. Valid values:
     *
     *   OSS: OSS object
     *   Media: media asset
     *
     * This parameter is required.
     *
     * @example OSS
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
