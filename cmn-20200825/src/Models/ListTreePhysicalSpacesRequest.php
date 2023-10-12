<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListTreePhysicalSpacesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $physicalSpaceIds;

    /**
     * @var string
     */
    public $physicalSpaceName;

    /**
     * @var bool
     */
    public $tree;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'physicalSpaceIds'  => 'PhysicalSpaceIds',
        'physicalSpaceName' => 'PhysicalSpaceName',
        'tree'              => 'Tree',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->physicalSpaceIds) {
            $res['PhysicalSpaceIds'] = $this->physicalSpaceIds;
        }
        if (null !== $this->physicalSpaceName) {
            $res['PhysicalSpaceName'] = $this->physicalSpaceName;
        }
        if (null !== $this->tree) {
            $res['Tree'] = $this->tree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTreePhysicalSpacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PhysicalSpaceIds'])) {
            if (!empty($map['PhysicalSpaceIds'])) {
                $model->physicalSpaceIds = $map['PhysicalSpaceIds'];
            }
        }
        if (isset($map['PhysicalSpaceName'])) {
            $model->physicalSpaceName = $map['PhysicalSpaceName'];
        }
        if (isset($map['Tree'])) {
            $model->tree = $map['Tree'];
        }

        return $model;
    }
}
