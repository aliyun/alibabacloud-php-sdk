<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponseBody\result;

use AlibabaCloud\Tea\Model;

class artcInfo extends Model
{
    /**
     * @description 源码地址
     *
     * @var string
     */
    public $artcUrl;

    /**
     * @description 原画转码地址
     *
     * @var string
     */
    public $artcH5Url;
    protected $_name = [
        'artcUrl'   => 'ArtcUrl',
        'artcH5Url' => 'ArtcH5Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artcUrl) {
            $res['ArtcUrl'] = $this->artcUrl;
        }
        if (null !== $this->artcH5Url) {
            $res['ArtcH5Url'] = $this->artcH5Url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return artcInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtcUrl'])) {
            $model->artcUrl = $map['ArtcUrl'];
        }
        if (isset($map['ArtcH5Url'])) {
            $model->artcH5Url = $map['ArtcH5Url'];
        }

        return $model;
    }
}
