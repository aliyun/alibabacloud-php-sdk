<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class RefreshObjectCachesRequest extends Model
{
    /**
     * @description When the comparison between the source content and the source site resources is consistent, should the resources within the corresponding range be forcibly refreshed. The default is false.
     *
     *   **true**: purges all resources in the range that corresponds to the type of the purge task. If you set this parameter to true, when the requested resource matches the resource in the range that corresponds to the type of the purge task, the POP retrieves the resource from the origin server, returns the resource to the client, and caches the resource.
     *   **false**: purges the changed resources in the range that corresponds to the type of the purge task. If you set this parameter to false, when the requested resource matches the resource in the range that corresponds to the type of the purge task, the POP obtains the Last-Modified parameter of the resource from the origin server. If the obtained value of the Last-Modified parameter is the same as that of the cached resource, the cached resource is returned. Otherwise, the POP retrieves the resource from the origin server, returns the resource to the client, and caches the resource.
     *
     * >  This parameter takes effect only when the ObjectType parameter is not set to File.
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description *   If you submit multiple URLs or directories at a time, separate them with line breaks (\\n) or (\\r\\n).
     *   The total number of domain names contained all URLs in a submitted task cannot exceed 10.
     *
     * This parameter is required.
     * @example http://example.com/image/1.png\\nhttp://aliyundoc.com/image/2.png
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The type of the object that you want to refresh. Valid values:
     *
     *   **File** (default): refreshes one or more files.
     *   **Directory**: refreshes the files in one or more directories.
     *   **Regex**: refreshes content based on regular expressions.
     *   **ExQuery**: omits parameters after the question mark in the URL and refreshes content.
     *
     * If you set the ObjectType parameter to Directory, the resources in the directory that you want to refresh are marked as expired. You cannot delete the directory. If clients request resources on POPs that are marked as expired, Alibaba Cloud CDN checks whether the resources on your origin server are updated. If resources are updated, Alibaba Cloud CDN retrieves the latest version of the resources and returns the resources to the clients. Otherwise, the origin server returns the 304 status code.
     * @example File
     *
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'force'         => 'Force',
        'objectPath'    => 'ObjectPath',
        'objectType'    => 'ObjectType',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshObjectCachesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
