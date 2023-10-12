<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListPhysicalSpacesRequest extends Model
{
    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 1
     *
     * @var string[]
     */
    public $physicalSpaceIds;

    /**
     * @example 阿里巴巴西溪园区
     *
     * @var string
     */
    public $physicalSpaceName;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'physicalSpaceIds'  => 'PhysicalSpaceIds',
        'physicalSpaceName' => 'PhysicalSpaceName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPhysicalSpacesRequest
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

        return $model;
    }
}
