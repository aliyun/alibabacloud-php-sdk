<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/uhd-enhance/20-11-20/Wwzf9z75GO5XdisS_20-11-20-07-13-48.mp4?Expires=1605858272&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=vvY0D%2Bl5eEzp%2BD7mPOWz0zMU7v****
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
