<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class BlockObjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var int
     */
    public $maxage;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'contentShrink' => 'Content',
        'extension' => 'Extension',
        'maxage' => 'Maxage',
        'siteId' => 'SiteId',
        'type' => 'Type',
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

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->maxage) {
            $res['Maxage'] = $this->maxage;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['Maxage'])) {
            $model->maxage = $map['Maxage'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
