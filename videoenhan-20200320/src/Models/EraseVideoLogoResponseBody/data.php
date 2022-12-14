<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-delogo/2020-03-20-11/53%3A56-DGNUGG7AcRlAylhr.mp4?Expires=1584707036&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=7CvsX7X1rSU%2B%2FDxnw484lb3LCD****
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
