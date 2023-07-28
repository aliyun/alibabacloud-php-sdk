<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListParameterVersionsResponseBody\parameterVersions;
use AlibabaCloud\Tea\Model;

class ListParameterVersionsResponseBody extends Model
{
    /**
     * @description The name of the common parameter.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The total number of entries returned.
     *
     * @example 2020-09-07T11:37:29Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The user who created the common parameter.
     *
     * @example parameter-description
     *
     * @var string
     */
    public $description;

    /**
     * @description The version number of the common parameter.
     *
     * @example p-a483b520e0axxxxxxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @description The time when the common parameter was created.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The ID of the common parameter.
     *
     * @example MyParameter
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the common parameter.
     *
     * @example MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The value of the common parameter.
     *
     * @var parameterVersions[]
     */
    public $parameterVersions;

    /**
     * @description The number of entries returned per page.
     *
     * @example FD08D89D-B6C8-4AA2-A2B4-521D3F4A39FA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The version information of the common parameter.
     *
     * @example 50
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The ID of the request.
     *
     * @example String
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createdBy'         => 'CreatedBy',
        'createdDate'       => 'CreatedDate',
        'description'       => 'Description',
        'id'                => 'Id',
        'maxResults'        => 'MaxResults',
        'name'              => 'Name',
        'nextToken'         => 'NextToken',
        'parameterVersions' => 'ParameterVersions',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->parameterVersions) {
            $res['ParameterVersions'] = [];
            if (null !== $this->parameterVersions && \is_array($this->parameterVersions)) {
                $n = 0;
                foreach ($this->parameterVersions as $item) {
                    $res['ParameterVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListParameterVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ParameterVersions'])) {
            if (!empty($map['ParameterVersions'])) {
                $model->parameterVersions = [];
                $n                        = 0;
                foreach ($map['ParameterVersions'] as $item) {
                    $model->parameterVersions[$n++] = null !== $item ? parameterVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
