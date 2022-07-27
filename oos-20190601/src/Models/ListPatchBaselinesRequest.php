<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListPatchBaselinesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $operationSystem;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $shareType;
    protected $_name = [
        'maxResults'      => 'MaxResults',
        'name'            => 'Name',
        'nextToken'       => 'NextToken',
        'operationSystem' => 'OperationSystem',
        'regionId'        => 'RegionId',
        'shareType'       => 'ShareType',
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
        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPatchBaselinesRequest
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
        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }

        return $model;
    }
}
