<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParameterVersionsResponseBody\parameterVersions;
use AlibabaCloud\Tea\Model;

class ListSecretParameterVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $id;

    /**
     * @var parameterVersions[]
     */
    public $parameterVersions;
    protected $_name = [
        'type'              => 'Type',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'description'       => 'Description',
        'maxResults'        => 'MaxResults',
        'createdBy'         => 'CreatedBy',
        'createdDate'       => 'CreatedDate',
        'name'              => 'Name',
        'totalCount'        => 'TotalCount',
        'id'                => 'Id',
        'parameterVersions' => 'ParameterVersions',
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretParameterVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}
