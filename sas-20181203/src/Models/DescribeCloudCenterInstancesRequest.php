<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeCloudCenterInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $criteria;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $flags;

    /**
     * @var int
     */
    public $importance;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logicalExp;

    /**
     * @var string
     */
    public $machineTypes;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var bool
     */
    public $noGroupTrace;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @var bool
     */
    public $useNextToken;
    protected $_name = [
        'criteria' => 'Criteria',
        'currentPage' => 'CurrentPage',
        'flags' => 'Flags',
        'importance' => 'Importance',
        'lang' => 'Lang',
        'logicalExp' => 'LogicalExp',
        'machineTypes' => 'MachineTypes',
        'nextToken' => 'NextToken',
        'noGroupTrace' => 'NoGroupTrace',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'useNextToken' => 'UseNextToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->flags) {
            $res['Flags'] = $this->flags;
        }

        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }

        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->noGroupTrace) {
            $res['NoGroupTrace'] = $this->noGroupTrace;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->useNextToken) {
            $res['UseNextToken'] = $this->useNextToken;
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
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Flags'])) {
            $model->flags = $map['Flags'];
        }

        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }

        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['NoGroupTrace'])) {
            $model->noGroupTrace = $map['NoGroupTrace'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['UseNextToken'])) {
            $model->useNextToken = $map['UseNextToken'];
        }

        return $model;
    }
}
