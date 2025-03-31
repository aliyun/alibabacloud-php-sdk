<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class PurgeCachesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @var bool
     */
    public $edgeComputePurge;

    /**
     * @var bool
     */
    public $force;

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
        'edgeComputePurge' => 'EdgeComputePurge',
        'force' => 'Force',
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

        if (null !== $this->edgeComputePurge) {
            $res['EdgeComputePurge'] = $this->edgeComputePurge;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
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

        if (isset($map['EdgeComputePurge'])) {
            $model->edgeComputePurge = $map['EdgeComputePurge'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
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
