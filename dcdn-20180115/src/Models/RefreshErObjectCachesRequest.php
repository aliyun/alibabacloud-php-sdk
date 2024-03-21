<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class RefreshErObjectCachesRequest extends Model
{
    /**
     * @description Specifies whether to refresh resources in a directory if the resources requested are different from the resources on the origin server. Default value: false.
     *
     *   **true**: refreshes all resources in the directory.
     *   **false**: refreshes the changed resources in the directory.
     *
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description Domain names that are merged for refreshing. POPs that provide services for the domain names are refreshed.
     *
     * > Separate multiple domain names with commas (,).
     * @example a.test.com,b.test.com
     *
     * @var string
     */
    public $mergeDomainName;

    /**
     * @description The URL that you want to refresh.
     *
     * > *   Separate URLs with line feeds (\n or \r\n). Each object path can be up to 1,024 characters in length.
     * >*   The URLs in a request must belong to the same domain name.
     * >*   You can refresh up to 1,000 URLs in each request.
     * @example http://example.com/examplefile.txt
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The refresh type. Valid values:
     *
     *   **File** (default): refreshes resources based on URLs.
     *   **Directory**: refreshes resources based on directories.
     *   **Regex**: refreshes content based on regular expressions.
     *   **IgnoreParams**: removes the question mark (`?`) and parameters after `?` in a request URL and refreshes content. After you call this operation with the request URL submitted, the system compares the submitted URL with the URL of the cached resource that does not include the query string. If the URLs match, the DCDN POPs refresh the cached resource.
     *
     * > *   If you set ObjectType to Directory, the resources in the directory that you want to refresh are marked as expired. You cannot delete the directory. If clients request resources after the resources on POPs are marked as expired, DCDN checks whether the resources on your origin server are updated with a later version. If a later version exists, DCDN retrieves the resources of the later version and returns the resources to the clients. Otherwise, DCDN retrieves the 304 status code from the origin server.
     * @example File
     *
     * @var string
     */
    public $objectType;

    /**
     * @example test.mysubdomain
     *
     * @var string
     */
    public $routineId;
    protected $_name = [
        'force'           => 'Force',
        'mergeDomainName' => 'MergeDomainName',
        'objectPath'      => 'ObjectPath',
        'objectType'      => 'ObjectType',
        'routineId'       => 'RoutineId',
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
        if (null !== $this->mergeDomainName) {
            $res['MergeDomainName'] = $this->mergeDomainName;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->routineId) {
            $res['RoutineId'] = $this->routineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshErObjectCachesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['MergeDomainName'])) {
            $model->mergeDomainName = $map['MergeDomainName'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['RoutineId'])) {
            $model->routineId = $map['RoutineId'];
        }

        return $model;
    }
}
