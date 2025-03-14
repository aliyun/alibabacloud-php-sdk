<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponseBody\config;

use AlibabaCloud\Tea\Model;

class cdnConfig extends Model
{
    /**
     * @description The CDN prefix for ad segments.
     *
     * @example http://cdn.com/
     *
     * @var string
     */
    public $adSegmentUrlPrefix;

    /**
     * @description The CDN prefix for content segments.
     *
     * @example http://cdn.com/
     *
     * @var string
     */
    public $contentSegmentUrlPrefix;
    protected $_name = [
        'adSegmentUrlPrefix' => 'AdSegmentUrlPrefix',
        'contentSegmentUrlPrefix' => 'ContentSegmentUrlPrefix',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adSegmentUrlPrefix) {
            $res['AdSegmentUrlPrefix'] = $this->adSegmentUrlPrefix;
        }
        if (null !== $this->contentSegmentUrlPrefix) {
            $res['ContentSegmentUrlPrefix'] = $this->contentSegmentUrlPrefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cdnConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdSegmentUrlPrefix'])) {
            $model->adSegmentUrlPrefix = $map['AdSegmentUrlPrefix'];
        }
        if (isset($map['ContentSegmentUrlPrefix'])) {
            $model->contentSegmentUrlPrefix = $map['ContentSegmentUrlPrefix'];
        }

        return $model;
    }
}
