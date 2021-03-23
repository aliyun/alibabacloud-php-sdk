<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListResponseBody\data;

use AlibabaCloud\Tea\Model;

class financialRelationInfoList extends Model
{
    /**
     * @var int
     */
    public $relationId;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountNickName;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $setupTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;
    protected $_name = [
        'relationId'      => 'RelationId',
        'accountType'     => 'AccountType',
        'accountId'       => 'AccountId',
        'accountName'     => 'AccountName',
        'accountNickName' => 'AccountNickName',
        'relationType'    => 'RelationType',
        'state'           => 'State',
        'setupTime'       => 'SetupTime',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountNickName) {
            $res['AccountNickName'] = $this->accountNickName;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->setupTime) {
            $res['SetupTime'] = $this->setupTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return financialRelationInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountNickName'])) {
            $model->accountNickName = $map['AccountNickName'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SetupTime'])) {
            $model->setupTime = $map['SetupTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
