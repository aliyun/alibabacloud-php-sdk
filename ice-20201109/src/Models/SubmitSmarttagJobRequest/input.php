<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobRequest;

use AlibabaCloud\Tea\Model;

class input extends Model
{
    /**
     * @description If Type is set to OSS, specify an OSS path. Example: OSS://test-bucket/video/202208/test.mp4.
     *
     * If Type is set to URL, specify an HTTP URL. Example: https://zc-test.oss-cn-shanghai.aliyuncs.com/test/unknowFace.mp4.
     * @example c5c62d8f0361337cab312dce8e77dc6d
     *
     * @var string
     */
    public $media;

    /**
     * @description The media type. Valid values:
     *
     *   OSS
     *   Media
     *   URL
     *
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
