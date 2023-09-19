<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListSecretParameterVersionsRequest extends Model
{
    /**
     * @description The number of entries per page. Valid values: 10 to 100. Default value: 50.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The name of the encryption parameter.
     *
     * @example MySecretParameter
     *
     * @var string
     */
    public $name;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The share type of the encryption parameter.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @description Specifies whether to decrypt the parameter value. The decrypted parameter value is returned only if this parameter is set to true. Otherwise, null is returned.
     *
     * @example false
     *
     * @var bool
     */
    public $withDecryption;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'name'           => 'Name',
        'nextToken'      => 'NextToken',
        'regionId'       => 'RegionId',
        'shareType'      => 'ShareType',
        'withDecryption' => 'WithDecryption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->withDecryption) {
            $res['WithDecryption'] = $this->withDecryption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretParameterVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['WithDecryption'])) {
            $model->withDecryption = $map['WithDecryption'];
        }

        return $model;
    }
}
