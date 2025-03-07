<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @description The output file. The file can be an OSS object or a media asset. The URL of an OSS object can be in one of the following formats:
     *
     *   oss://bucket/object
     *   http(s)://bucket.oss-[regionId].aliyuncs.com/object
     *
     * This parameter is required.
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $media;

    /**
     * @description The type of the output file. Valid values:
     *
     * This parameter is required.
     * @example Media
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
     * @return output
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
