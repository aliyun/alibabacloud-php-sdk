<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListParameterVersionsResponseBody\parameterVersions;
use AlibabaCloud\Tea\Model;

class ListParameterVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var parameterVersions[]
     */
    public $parameterVersions;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'type'              => 'Type',
        'totalCount'        => 'TotalCount',
        'parameterVersions' => 'ParameterVersions',
        'description'       => 'Description',
        'createdBy'         => 'CreatedBy',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'maxResults'        => 'MaxResults',
        'createdDate'       => 'CreatedDate',
        'id'                => 'Id',
        'name'              => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
