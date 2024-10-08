<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PurgeCachesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $edgeComputePurge;

    /**
     * @example true
     *
     * @var bool
     */
    public $force;

    /**
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description This parameter is required.
     *
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'contentShrink'    => 'Content',
        'edgeComputePurge' => 'EdgeComputePurge',
        'force'            => 'Force',
        'siteId'           => 'SiteId',
        'type'             => 'Type',
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

    /**
     * @param array $map
     *
     * @return PurgeCachesShrinkRequest
     */
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
