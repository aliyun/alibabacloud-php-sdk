<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListInventoryEntriesResponseBody extends Model
{
    /**
     * @description The time when the request was sent.
     *
     * @example 2020-09-17T12:28:13Z
     *
     * @var string
     */
    public $captureTime;

    /**
     * @description The configurations of the component.
     *
     * @var mixed[][]
     */
    public $entries;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-bp1cpoxxxwxxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of entries returned per page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results.
     *
     * @example gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example A81E4B2E-6B33-4BAE-9856-55DB7C893E01
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The version number of the component.
     *
     * @example 1.0
     *
     * @var string
     */
    public $schemaVersion;

    /**
     * @description The name of the component.
     *
     * @example ACS:InstanceInformation
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'captureTime'   => 'CaptureTime',
        'entries'       => 'Entries',
        'instanceId'    => 'InstanceId',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'schemaVersion' => 'SchemaVersion',
        'typeName'      => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->captureTime) {
            $res['CaptureTime'] = $this->captureTime;
        }
        if (null !== $this->entries) {
            $res['Entries'] = $this->entries;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInventoryEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaptureTime'])) {
            $model->captureTime = $map['CaptureTime'];
        }
        if (isset($map['Entries'])) {
            if (!empty($map['Entries'])) {
                $model->entries = $map['Entries'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
