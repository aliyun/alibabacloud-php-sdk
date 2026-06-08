<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListPendingApprovalsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessTypesShrink;

    /**
     * @var string
     */
    public $defSchema;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $granteeShrink;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceShrink;

    /**
     * @var string
     */
    public $resourceTypeShrink;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'accessTypesShrink' => 'AccessTypes',
        'defSchema' => 'DefSchema',
        'endTime' => 'EndTime',
        'granteeShrink' => 'Grantee',
        'nextToken' => 'NextToken',
        'pageSize' => 'PageSize',
        'resourceShrink' => 'Resource',
        'resourceTypeShrink' => 'ResourceType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTypesShrink) {
            $res['AccessTypes'] = $this->accessTypesShrink;
        }

        if (null !== $this->defSchema) {
            $res['DefSchema'] = $this->defSchema;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->granteeShrink) {
            $res['Grantee'] = $this->granteeShrink;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceShrink) {
            $res['Resource'] = $this->resourceShrink;
        }

        if (null !== $this->resourceTypeShrink) {
            $res['ResourceType'] = $this->resourceTypeShrink;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTypes'])) {
            $model->accessTypesShrink = $map['AccessTypes'];
        }

        if (isset($map['DefSchema'])) {
            $model->defSchema = $map['DefSchema'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Grantee'])) {
            $model->granteeShrink = $map['Grantee'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Resource'])) {
            $model->resourceShrink = $map['Resource'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceTypeShrink = $map['ResourceType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
