<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PreloadCachesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @var string
     */
    public $headersShrink;

    /**
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'contentShrink' => 'Content',
        'headersShrink' => 'Headers',
        'siteId'        => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentShrink) {
            $res['Content'] = $this->contentShrink;
        }
        if (null !== $this->headersShrink) {
            $res['Headers'] = $this->headersShrink;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreloadCachesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->contentShrink = $map['Content'];
        }
        if (isset($map['Headers'])) {
            $model->headersShrink = $map['Headers'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
