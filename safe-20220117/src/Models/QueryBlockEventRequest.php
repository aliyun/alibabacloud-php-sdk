<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryBlockEventRequest\regionReqs;

class QueryBlockEventRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var string
     */
    public $bgSystemName;

    /**
     * @var string
     */
    public $blockHarm;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $deptNo;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var bool
     */
    public $needRule;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string[]
     */
    public $productCodes;

    /**
     * @var regionReqs[]
     */
    public $regionReqs;

    /**
     * @var int
     */
    public $reqTimestamp;

    /**
     * @var string[]
     */
    public $scope;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'bgSystemName' => 'BgSystemName',
        'blockHarm' => 'BlockHarm',
        'category' => 'Category',
        'deptNo' => 'DeptNo',
        'endTime' => 'EndTime',
        'limit' => 'Limit',
        'needRule' => 'NeedRule',
        'page' => 'Page',
        'productCodes' => 'ProductCodes',
        'regionReqs' => 'RegionReqs',
        'reqTimestamp' => 'ReqTimestamp',
        'scope' => 'Scope',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->productCodes)) {
            Model::validateArray($this->productCodes);
        }
        if (\is_array($this->regionReqs)) {
            Model::validateArray($this->regionReqs);
        }
        if (\is_array($this->scope)) {
            Model::validateArray($this->scope);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->bgSystemName) {
            $res['BgSystemName'] = $this->bgSystemName;
        }

        if (null !== $this->blockHarm) {
            $res['BlockHarm'] = $this->blockHarm;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->deptNo) {
            $res['DeptNo'] = $this->deptNo;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->needRule) {
            $res['NeedRule'] = $this->needRule;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->productCodes) {
            if (\is_array($this->productCodes)) {
                $res['ProductCodes'] = [];
                $n1 = 0;
                foreach ($this->productCodes as $item1) {
                    $res['ProductCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionReqs) {
            if (\is_array($this->regionReqs)) {
                $res['RegionReqs'] = [];
                $n1 = 0;
                foreach ($this->regionReqs as $item1) {
                    $res['RegionReqs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reqTimestamp) {
            $res['ReqTimestamp'] = $this->reqTimestamp;
        }

        if (null !== $this->scope) {
            if (\is_array($this->scope)) {
                $res['Scope'] = [];
                $n1 = 0;
                foreach ($this->scope as $item1) {
                    $res['Scope'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['BgSystemName'])) {
            $model->bgSystemName = $map['BgSystemName'];
        }

        if (isset($map['BlockHarm'])) {
            $model->blockHarm = $map['BlockHarm'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['DeptNo'])) {
            $model->deptNo = $map['DeptNo'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['NeedRule'])) {
            $model->needRule = $map['NeedRule'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['ProductCodes'])) {
            if (!empty($map['ProductCodes'])) {
                $model->productCodes = [];
                $n1 = 0;
                foreach ($map['ProductCodes'] as $item1) {
                    $model->productCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionReqs'])) {
            if (!empty($map['RegionReqs'])) {
                $model->regionReqs = [];
                $n1 = 0;
                foreach ($map['RegionReqs'] as $item1) {
                    $model->regionReqs[$n1] = regionReqs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReqTimestamp'])) {
            $model->reqTimestamp = $map['ReqTimestamp'];
        }

        if (isset($map['Scope'])) {
            if (!empty($map['Scope'])) {
                $model->scope = [];
                $n1 = 0;
                foreach ($map['Scope'] as $item1) {
                    $model->scope[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
