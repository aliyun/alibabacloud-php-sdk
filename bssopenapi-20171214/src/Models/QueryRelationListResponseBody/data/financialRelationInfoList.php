<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListResponseBody\data;

use AlibabaCloud\Tea\Model;

class financialRelationInfoList extends Model
{
    /**
     * @example 1851253838840762
     *
     * @var int
     */
    public $accountId;

    /**
     * @example caiwuyun_test4
     *
     * @var string
     */
    public $accountName;

    /**
     * @example test4
     *
     * @var string
     */
    public $accountNickName;

    /**
     * @example MEMBER
     *
     * @var string
     */
    public $accountType;

    /**
     * @example 2021-03-08T15:12Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 51463
     *
     * @var int
     */
    public $relationId;

    /**
     * @example FinancialManagement
     *
     * @var string
     */
    public $relationType;

    /**
     * @example 2021-03-02T15:12Z
     *
     * @var string
     */
    public $setupTime;

    /**
     * @example 2021-03-02T15:12Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example RELATED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accountId'       => 'AccountId',
        'accountName'     => 'AccountName',
        'accountNickName' => 'AccountNickName',
        'accountType'     => 'AccountType',
        'endTime'         => 'EndTime',
        'relationId'      => 'RelationId',
        'relationType'    => 'RelationType',
        'setupTime'       => 'SetupTime',
        'startTime'       => 'StartTime',
        'state'           => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountNickName) {
            $res['AccountNickName'] = $this->accountNickName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->setupTime) {
            $res['SetupTime'] = $this->setupTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountNickName'])) {
            $model->accountNickName = $map['AccountNickName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['SetupTime'])) {
            $model->setupTime = $map['SetupTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
