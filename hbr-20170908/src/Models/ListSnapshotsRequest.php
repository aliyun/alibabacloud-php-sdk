<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class ListSnapshotsRequest extends Model
{
    /**
     * @var int
     */
    public $completeTimeEnd;

    /**
     * @var int
     */
    public $completeTimeStart;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $protectedResourceId;

    /**
     * @var int
     */
    public $skip;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'completeTimeEnd' => 'CompleteTimeEnd',
        'completeTimeStart' => 'CompleteTimeStart',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'planId' => 'PlanId',
        'protectedResourceId' => 'ProtectedResourceId',
        'skip' => 'Skip',
        'sourceType' => 'SourceType',
        'vaultId' => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeTimeEnd) {
            $res['CompleteTimeEnd'] = $this->completeTimeEnd;
        }

        if (null !== $this->completeTimeStart) {
            $res['CompleteTimeStart'] = $this->completeTimeStart;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->protectedResourceId) {
            $res['ProtectedResourceId'] = $this->protectedResourceId;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['CompleteTimeEnd'])) {
            $model->completeTimeEnd = $map['CompleteTimeEnd'];
        }

        if (isset($map['CompleteTimeStart'])) {
            $model->completeTimeStart = $map['CompleteTimeStart'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['ProtectedResourceId'])) {
            $model->protectedResourceId = $map['ProtectedResourceId'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
