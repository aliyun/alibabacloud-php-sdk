<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PurgeCachesShrinkRequest extends Model
{
    /**
     * @description The content to purge.
     *
     * @var string
     */
    public $contentShrink;

    /**
     * @description Specifies whether to purge cached resources for edge computing. For example, purge the resources cached by the CacheAPI operation of Edge Routine.
     *
     * @example true
     *
     * @var bool
     */
    public $edgeComputePurge;

    /**
     * @description Specifies whether to purge resources in a directory if the resources requested are different from the resources on the origin server. Default value: false.
     *
     *   **true**: purges all resources in the directory.
     *   **false**: purges only changed resources in the directory.
     *
     * >  This configuration takes effect for the following purge task types: directory, cachetag, ignoreParams, hostname, and purgeall.
     * @example true
     *
     * @var bool
     */
    public $force;

    /**
     * @description The website ID. You can call the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation to obtain the ID.
     *
     * This parameter is required.
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The type of the purge task. Valid values:
     *
     *   **file** (default): purges the cache by file.
     *   **cachetag**: purges the cache by cache tag.
     *   **directory**: purges the cache by directory.
     *   **ignoreParams**: purges the cache by URL with specific parameters ignored. This option ignores the question mark (?) and parameters after the question mark (?) in a request URL and purges the cache. After you call this operation with the request URL submitted, the system compares the submitted URL with the URL of the cached resource without specified parameters. If the URLs match, the POPs purge the cached resources.
     *   **hostname**: purges the cache by hostname.
     *   **purgeall**: purges all cache.
     *
     * This parameter is required.
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
