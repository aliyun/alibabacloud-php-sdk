<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeProtocolServiceRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure the idempotence?](https://help.aliyun.com/document_detail/25693.html)
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description or a part of the description of the protocol service.
     *
     * Limits:
     *
     *   The description must be 2 to 128 characters in length.
     *   The description must start with a letter and cannot start with `http://` or `https://`.
     *   The description can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The number of results for each query.
     *
     *   Maximum value: 100.
     *   Minimum value: 10.
     *   Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If not all dataflows are returned in a query, the return value of the NextToken parameter is not empty. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example aBcdg==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the protocol service.
     *
     *   Format: CSV.
     *   Limit: You can specify a maximum of 10 protocol service IDs.
     *
     * @example ptc-197ed6a00f2b****,ptc-196ed6a00f2b****
     *
     * @var string
     */
    public $protocolServiceIds;

    /**
     * @description The status of the protocol service.
     *
     * Valid values:
     *
     *   Creating: The protocol service is being created.
     *   Starting: The protocol service is being started.
     *   Running: The protocol service is running.
     *   Updating: The protocol service is being updated.
     *   Deleting: The protocol service is being deleted.
     *   Stopping: The protocol service is being stopped.
     *   Stopped: The protocol service is stopped.
     *
     * @example Running,Updating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'description'        => 'Description',
        'fileSystemId'       => 'FileSystemId',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'protocolServiceIds' => 'ProtocolServiceIds',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->protocolServiceIds) {
            $res['ProtocolServiceIds'] = $this->protocolServiceIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProtocolServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProtocolServiceIds'])) {
            $model->protocolServiceIds = $map['ProtocolServiceIds'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
