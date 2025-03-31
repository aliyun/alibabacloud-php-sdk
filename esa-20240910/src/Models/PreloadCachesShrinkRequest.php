<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $siteId;
    protected $_name = [
        'contentShrink' => 'Content',
        'headersShrink' => 'Headers',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
