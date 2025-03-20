<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PurgeCachesShrinkRequest extends Model
{
    /**
     * @description Content to be refreshed.
     *
     * @var string
     */
    public $contentShrink;

    /**
     * @description Used for refreshing cached resources in edge computing, such as allowing the refresh of content cached using the CacheAPI interface of an edge function.
     *
     * @example true
     *
     * @var bool
     */
    public $edgeComputePurge;

    /**
     * @description Indicates whether to refresh all resources under the directory when the content from the origin and the source resource are inconsistent. The default is false.
     * - **true**: Refreshes all resources under the specified directory.
     * - **false**: Refreshes only the changed resources under the specified directory.
     *
     * >
     * >  Applies to: Directory refresh, cachetag refresh, ignoreParams refresh, hostname refresh, and purge all cache of the site.
     *
     * @example true
     *
     * @var bool
     */
    public $force;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) interface.
     *
     * This parameter is required.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The type of refresh task. Possible values:
     * - **file** (default): File refresh.
     * - **cachekey**: Cachekey refresh.
     * - **cachetag**: Cachetag refresh.
     * - **directory**: Directory refresh.
     * - **ignoreParams**: Ignore parameters refresh. Ignoring parameters means removing the ? and everything after it in the request URL. When performing an ignore parameters refresh, the user first submits the URL without parameters through the interface. The submitted URLs to be refreshed will then be matched against the cached resource URLs with the parameters removed. If the cached resource URL, after removing the parameters, matches the URL to be refreshed, the CDN node will refresh the cached resources.
     * - **hostname**: Hostname refresh.
     * - **purgeall**: Purge all cache under the site.
     *
     * This parameter is required.
     *
     * @example file
     *
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

    public function validate() {}

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
