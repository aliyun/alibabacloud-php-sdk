<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoseg\V20200320\Models\SegmentGreenScreenVideoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/greenscreen-segmentation/5EDA26EE-DE62-49AA-8F85-37B73D38CD47.mp4?Expires=1611542653&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=ttD4ykMniCBVnlCRNfObgRtnVu****
     *
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'videoURL' => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
