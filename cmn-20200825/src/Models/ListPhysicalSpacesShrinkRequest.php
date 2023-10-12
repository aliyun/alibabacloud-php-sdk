<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListPhysicalSpacesShrinkRequest extends Model
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
     * @var string
     */
    public $physicalSpaceIdsShrink;

    /**
     * @example 阿里巴巴西溪园区
     *
     * @var string
     */
    public $physicalSpaceName;
    protected $_name = [
        'instanceId'             => 'InstanceId',
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'physicalSpaceIdsShrink' => 'PhysicalSpaceIds',
        'physicalSpaceName'      => 'PhysicalSpaceName',
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
        if (null !== $this->physicalSpaceIdsShrink) {
            $res['PhysicalSpaceIds'] = $this->physicalSpaceIdsShrink;
        }
        if (null !== $this->physicalSpaceName) {
            $res['PhysicalSpaceName'] = $this->physicalSpaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPhysicalSpacesShrinkRequest
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
            $model->physicalSpaceIdsShrink = $map['PhysicalSpaceIds'];
        }
        if (isset($map['PhysicalSpaceName'])) {
            $model->physicalSpaceName = $map['PhysicalSpaceName'];
        }

        return $model;
    }
}
